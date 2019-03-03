<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AdminBundle\Form\Type\SubscriberType;
use DirectoryPlatform\AppBundle\Entity\Subscriber;

class SubscriberController extends Controller
{
	/**
	 * @Route("/subscribers", name="admin_subscriber")
	 */
	public function indexAction(Request $request)
	{
		$subscribers = $this->getDoctrine()->getRepository('AppBundle:Subscriber')->findAll();
		$subscribers = $this->get('knp_paginator')->paginate($subscribers, $request->query->getInt('page', 1), 10);

		return $this->render('AdminBundle::Subscriber/index.html.twig', [
			'subscribers' => $subscribers
		]);
	}

	/**
	 * @Route("/subscribers/delete/{id}", name="admin_subscriber_delete", requirements={"id": "\d+"})
	 * @ParamConverter("subscriber", class="DirectoryPlatform\AppBundle\Entity\Subscriber")
	 */
	public function deleteAction(Request $request, Subscriber $subscriber)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($subscriber);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Subscriber has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting subscriber object.'));
		}

		return $this->redirectToRoute('admin_subscriber');
	}

	/**
	 * @Route("/subscribers/update/{id}", name="admin_subscriber_update", requirements={"id": "\d+"})
	 * @ParamConverter("subscriber", class="DirectoryPlatform\AppBundle\Entity\Subscriber")
	 */
	public function updateAction(Request $request, Subscriber $subscriber)
	{
		$form = $this->createForm(SubscriberType::class, $subscriber);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Subscriber $subscriber */
			$subscriber = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($subscriber);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Subscriber has been successfully saved.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving subscriber object.'));
			}

			return $this->redirectToRoute('admin_subscriber');
		}

		return $this->render('AdminBundle::Subscriber/update.html.twig', [
			'subscriber' => $subscriber,
			'form' => $form->createView()
		]);
	}

	/**
	 * @Route("/subscribers/create", name="admin_subscriber_create")
	 */
	public function createAction(Request $request) {
		$subscriber = new Subscriber();

		$form = $this->createForm(SubscriberType::class, $subscriber);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Subscriber $subscriber */
			$subscriber = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($subscriber);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Subscriber has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating subscriber object.'));
			}

			return $this->redirectToRoute('admin_subscriber');
		}

		return $this->render('AdminBundle::Subscriber/create.html.twig', ['form' => $form->createView()]);
	}	
}