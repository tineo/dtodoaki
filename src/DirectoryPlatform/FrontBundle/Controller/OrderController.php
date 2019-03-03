<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Payum\Core\Request\GetHumanStatus;

use DirectoryPlatform\AppBundle\Entity\Order;
use DirectoryPlatform\AppBundle\Entity\OrderItem;
use DirectoryPlatform\AppBundle\Entity\Payment;
use DirectoryPlatform\FrontBundle\Form\Type\OrderType;

class OrderController extends Controller
{
    /**
     * @Route("/accounts/orders", name="order")
     */
    public function ordersAction(Request $request)
    {
        $orders = $this->getDoctrine()->getRepository('AppBundle:Order')->findAllByUser($this->getUser());
        $orders = $this->get('knp_paginator')->paginate($orders, $request->query->getInt('page', 1), 10);

        return $this->render('FrontBundle::Order/index.html.twig', [
            'orders' => $orders
        ]);
    }

    /**
     * @Route("/accounts/invoice/{id}", name="invoice", requirements={"id": "\d+"})
     * @ParamConverter("order", class="DirectoryPlatform\AppBundle\Entity\Order")
     */
    public function invoiceAction(Request $request, Order $order)
    {
        if ($order->getStatus() != Order::STATUS_COMPLETED) {
            throw $this->createAccessDeniedException('You are not allowed to access this page.');
        }

        return $this->render('FrontBundle::Order/invoice.html.twig', [
            'order' => $order,
            'orderRepository' => $this->getDoctrine()->getRepository('AppBundle:Order'),            
        ]);
    }

    /**
     * @Route("/accounts/order/paypal/completed", name="order_paypal_completed")
     */
    public function orderPaypalCompletedAction(Request $request)
    {
        $token = $this->get('payum')->getHttpRequestVerifier()->verify($request);

        $identity = $token->getDetails();
        $payment = $this->get('payum')->getStorage($identity->getClass())->find($identity);

        $gateway = $this->get('payum')->getGateway($token->getGatewayName());
        $gateway->execute($status = new GetHumanStatus($payment));

        $order = $payment->getOrder();

        if ($status->isCaptured() || $status->isAuthorized()) {
            $order->setStatus(Order::STATUS_COMPLETED);
            $this->addFlash('success', $this->get('translator')->trans('Payment has been successful.'));
        }

        if ($status->isPending()) {
            $this->addFlash('danger', $this->get('translator')->trans('Payment has been canceled.'));
        }

        if ($status->isFailed() || $status->isCanceled()) {
            $order->setStatus(Order::STATUS_CANCELED);
            $this->addFlash('danger', $this->get('translator')->trans('Payment has been canceled.'));
        }

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving object.'));
        }


        return $this->redirectToRoute('order');
    }

    /**
     * @Route("/accounts/checkout", name="checkout")
     */
    public function checkoutAction(Request $request)
    {
        $orderForm = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser(),
            'gateways' => $this->getParameter('app.gateways'),
        ]);
        $orderForm->handleRequest($request);

        // Calculate total price
        $products = $request->getSession()->get('products');
        if (!$products) {
            $this->addFlash('danger', $this->get('translator')->trans('Cart is empty. Not able to proceed checkout.'));

            return $this->redirectToRoute('cart');
        }

        $price = 0;
        foreach ($products as $product) {
            $price += $product['price'];
        }

        // Save order
        if ($orderForm->isSubmitted() && $orderForm->isValid()) {
            $order = $orderForm->getData();
            $order->setStatus(Order::STATUS_NEW);
            $order->setUser($this->getUser());
            $order->setCurrency($this->getParameter('app.currency'));
            $order->setPrice($price);

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($order);
                $em->flush();
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred whe saving order.'));
            }

            // Save order items
            foreach ($products as $product) {
                $listing = $this->getDoctrine()->getRepository('AppBundle:Listing')->findOneBy(['id' => $product['listing_id']]);

                $orderItem = new OrderItem();
                $orderItem->setOrder($order);
                $orderItem->setPrice($product['price']);
                $orderItem->setType($product['type']);
                $orderItem->setListing($listing);
                $orderItem->setDuration($product['duration']);

                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($orderItem);
                    $em->flush();
                } catch (\Exception $e) {
                    $this->addFlash('danger', $this->get('translator')->trans('An error occurred whe saving order item.'));
                }
            }

            $request->getSession()->remove('products');
            $this->addFlash('success', $this->get('translator')->trans('Order has been successfully saved.'));

            if ($order->getGateway() == 'paypal') {
                $gatewayName = 'paypal_express_checkout';

                $storage = $this->get('payum')->getStorage(Payment::class);

                $payment = $storage->create();
                $payment->setNumber(uniqid());
                $payment->setCurrencyCode($this->getParameter('app.currency'));
                $payment->setTotalAmount($price * 100);
                $payment->setDescription('A description');
                $payment->setClientId($order->getCompany()->getId());
                $payment->setClientEmail($order->getCompany()->getEmail());
                $payment->setOrder($order);

                $storage->update($payment);

                $captureToken = $this->get('payum')->getTokenFactory()->createCaptureToken($gatewayName, $payment, 'order_paypal_completed');
                return $this->redirect($captureToken->getTargetUrl());
            }

            return $this->redirectToRoute('order');
        }

        return $this->render('FrontBundle::Order/checkout.html.twig', ['order' => $orderForm->createView()]);
    }
}