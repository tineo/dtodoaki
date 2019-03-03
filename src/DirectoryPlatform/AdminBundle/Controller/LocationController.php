<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AdminBundle\Form\Type\LocationType;
use DirectoryPlatform\AppBundle\Helper\Hierarchy;
use DirectoryPlatform\AppBundle\Entity\Location;

class LocationController extends Controller
{
	/**
	 * @Route("/locations", name="admin_location")
	 */
	public function indexAction(Request $request)
	{
		$locations = $this->getDoctrine()->getRepository('AppBundle:Location')->findParent();
		$locations = $this->get('knp_paginator')->paginate($locations, $request->query->getInt('page', 1), 10);

		return $this->render('AdminBundle::Location/index.html.twig', [
			'hierarchy' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Location'), 'location', 'locations'),
			'locations' => $locations
		]);
	}

	/**
	 * @Route("/locations/delete/{id}", name="admin_location_delete", requirements={"id": "\d+"})
	 * @ParamConverter("location", class="DirectoryPlatform\AppBundle\Entity\Location")
	 */
	public function deleteAction(Request $request, Location $location)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($location);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Location has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting location object.' . $e));
		}

		return $this->redirectToRoute('admin_location');
	}

	/**
	 * @Route("/locations/update/{id}", name="admin_location_update", requirements={"id": "\d+"})
	 * @ParamConverter("location", class="DirectoryPlatform\AppBundle\Entity\Location")
	 */
	public function updateAction(Request $request, Location $location)
	{
		$hierarchy = new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Location'), 'location', 'locations');

		$form = $this->createForm(LocationType::class, $location, ['hierarchy' => $hierarchy]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Location $location */
			$location = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($location);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Location has been successfully saved.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving location object.'));
			}

			return $this->redirectToRoute('admin_location');
		}

		return $this->render('AdminBundle::Location/update.html.twig', [
			'location' => $location,
			'form' => $form->createView()
		]);
	}

	/**
	 * @Route("/locations/create", name="admin_location_create")
	 */
	public function createAction(Request $request) {
		$location = new Location();
		$hierarchy = new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Location'), 'location', 'locations');

		$form = $this->createForm(LocationType::class, $location, ['hierarchy' => $hierarchy]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Location $location */
			$location = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($location);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Location has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating location object.'));
			}

			return $this->redirectToRoute('admin_location');
		}

		return $this->render('AdminBundle::Location/create.html.twig', ['form' => $form->createView()]);
	}
}