<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AdminBundle\Form\Type\AmenityType;
use DirectoryPlatform\AppBundle\Helper\Hierarchy;
use DirectoryPlatform\AppBundle\Entity\Amenity;

class AmenityController extends Controller
{
	/**
	 * @Route("/amenities", name="admin_amenity")
	 */
	public function indexAction(Request $request)
	{
		$amenities = $this->getDoctrine()->getRepository('AppBundle:Amenity')->findAll();
		$amenities = $this->get('knp_paginator')->paginate($amenities, $request->query->getInt('page', 1), 10);

		return $this->render('AdminBundle::Amenity/index.html.twig', ['amenities' => $amenities]);
	}

	/**
	 * @Route("/amenities/delete/{id}", name="admin_amenity_delete", requirements={"id": "\d+"})
	 * @ParamConverter("amenity", class="DirectoryPlatform\AppBundle\Entity\Amenity")
	 */
	public function deleteAction(Request $request, Amenity $amenity)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($amenity);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Amenity has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting amenity object.'));
		}

		return $this->redirectToRoute('admin_amenity');
	}

	/**
	 * @Route("/amenities/update/{id}", name="admin_amenity_update", requirements={"id": "\d+"})
	 * @ParamConverter("amenity", class="DirectoryPlatform\AppBundle\Entity\Amenity")
	 */
	public function updateAction(Request $request, Amenity $amenity)
	{
		$form = $this->createForm(AmenityType::class, $amenity);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Amenity $amenity */
			$amenity = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($amenity);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Amenity has been successfully saved.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving amenity object.'));
			}

			return $this->redirectToRoute('admin_amenity');
		}

		return $this->render('AdminBundle::Amenity/update.html.twig', [
			'amenity' => $amenity,
			'form' => $form->createView()
		]);
	}

	/**
	 * @Route("/amenities/create", name="admin_amenity_create")
	 */
	public function createAction(Request $request) {
		$amenity = new Amenity();

		$form = $this->createForm(AmenityType::class, $amenity);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Amenity $amenity */
			$amenity = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($amenity);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Amenity has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating amenity object.'));
			}

			return $this->redirectToRoute('admin_amenity');
		}

		return $this->render('AdminBundle::Amenity/create.html.twig', ['form' => $form->createView()]);
	}
}