<?php

namespace DirectoryPlatform\AdminBundle\Controller;

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
     * @Route("/orders", name="admin_order")
     */
    public function indexAction(Request $request)
    {
        $orders = $this->getDoctrine()->getRepository('AppBundle:Order')->findAll();
        $orders = $this->get('knp_paginator')->paginate($orders, $request->query->getInt('page', 1), 10);

        return $this->render('AdminBundle::Order/index.html.twig', [
            'orders' => $orders
        ]);
    }

    /**
     * @Route("/orders/complete/{id}", name="admin_order_complete", requirements={"id": "\d+"})
     * @ParamConverter("order", class="DirectoryPlatform\AppBundle\Entity\Order")
     */
    public function completeAction(Request $request, Order $order)
    {
        try {
            $order->setStatus(Order::STATUS_COMPLETED);
            $this->addFlash('success', $this->get('translator')->trans('Order status successfully changed.'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving order object.'));
        }

        return $this->redirectToRoute('admin_order');
    } 

    /**
     * @Route("/orders/cancel/{id}", name="admin_order_cancel", requirements={"id": "\d+"})
     * @ParamConverter("order", class="DirectoryPlatform\AppBundle\Entity\Order")
     */
    public function cancelAction(Request $request, Order $order)
    {
        try {
            $order->setStatus(Order::STATUS_CANCELED);
            $this->addFlash('success', $this->get('translator')->trans('Order status successfully changed.'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving order object.'));
        }

        return $this->redirectToRoute('admin_order');        
    }       
}