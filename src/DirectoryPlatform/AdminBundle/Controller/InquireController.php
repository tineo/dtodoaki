<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AdminBundle\Form\Type\InquireType;
use DirectoryPlatform\AppBundle\Entity\Inquire;

class InquireController extends Controller
{
	/**
	 * @Route("/inquires", name="admin_inquire")
	 */
	public function indexAction(Request $request)
	{
		$inquires = $this->getDoctrine()->getRepository('AppBundle:Inquire')->findAll();
		$inquires = $this->get('knp_paginator')->paginate($inquires, $request->query->getInt('page', 1), 10);

		return $this->render('AdminBundle::Inquire/index.html.twig', [
			'inquires' => $inquires
		]);
	}

	/**
	 * @Route("/inquires/delete/{id}", name="admin_inquire_delete", requirements={"id": "\d+"})
	 * @ParamConverter("inquire", class="DirectoryPlatform\AppBundle\Entity\Inquire")
	 */
	public function deleteAction(Request $request, Inquire $inquire)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($inquire);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Inquire has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting inquire object.'));
		}

		return $this->redirectToRoute('admin_inquire');
	}

	/**
	 * @Route("/inquires/update/{id}", name="admin_inquire_update", requirements={"id": "\d+"})
	 * @ParamConverter("inquire", class="DirectoryPlatform\AppBundle\Entity\Inquire")
	 */
	public function updateAction(Request $request, Inquire $inquire)
	{
		$form = $this->createForm(InquireType::class, $inquire);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Inquire $inquire */
			$inquire = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($inquire);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Inquire has been successfully saved.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving inquire object.'));
			}

			return $this->redirectToRoute('admin_inquire');
		}

		return $this->render('AdminBundle::Inquire/update.html.twig', [
			'inquire' => $inquire,
			'form' => $form->createView()
		]);
	}

	/**
	 * @Route("/inquires/create", name="admin_inquire_create")
	 */
	public function createAction(Request $request) {
		$inquire = new Inquire();

		$form = $this->createForm(InquireType::class, $inquire);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Inquire $inquire */
			$inquire = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($inquire);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Inquire has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating inquire object.'));
			}

			return $this->redirectToRoute('admin_inquire');
		}

		return $this->render('AdminBundle::Inquire/create.html.twig', ['form' => $form->createView()]);
	}	
}