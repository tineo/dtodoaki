<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AdminBundle\Form\Type\ListingType;
use DirectoryPlatform\AppBundle\Entity\Field;
use DirectoryPlatform\AppBundle\Helper\Hierarchy;
use DirectoryPlatform\AppBundle\Entity\Image;
use DirectoryPlatform\AppBundle\Entity\Listing;

class ListingController extends Controller
{
	/**
	 * @Route("/listings", name="admin_listing")
	 */
	public function indexAction(Request $request)
	{
		$listings = $this->getDoctrine()->getRepository('AppBundle:Listing')->findAll();
		$listings = $this->get('knp_paginator')->paginate($listings, $request->query->getInt('page', 1), 10);

		return $this->render('AdminBundle::Listing/index.html.twig', ['listings' => $listings]);
	}

	/**
	 * @Route("/listings/create", name="admin_listing_create")
	 */
	public function createAction(Request $request)
    {
		$listing = new Listing();

		$form = $this->createForm(ListingType::class, $listing, [
			'currency' => $this->getParameter('app.currency'),
			'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
			'hierarchy_locations' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Location'), 'location', 'locations'),
		]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$listing = $form->getData();
			$listing->setUser($this->getUser());

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($listing);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Listing has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating listing object.'));
			}

			return $this->redirectToRoute('admin_listing');
		}

		return $this->render('AdminBundle::Listing/create.html.twig', ['form'  => $form->createView()]);
	}

	/**
	 * @Route("/listings/delete/{id}", name="admin_listing_delete", requirements={"id": "\d+"})
	 * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
	 */
	public function deleteAction(Request $request, Listing $listing)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($listing);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Listing has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting listing object.'));
		}

		return $this->redirectToRoute('admin_listing');
	}

	/**
	 * @Route("/listings/update/{id}", name="admin_listing_update", requirements={"id": "\d+"})
	 * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
	 */
	public function updateAction(Request $request, Listing $listing)
    {
		$form = $this->createForm(ListingType::class, $listing, [
			'currency' => $this->getParameter('app.currency'),
			'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
			'hierarchy_locations' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Location'), 'location', 'locations'),
		]);
		$form->handleRequest($request);


		if ($form->isSubmitted() && $form->isValid()) {
            /** @var Listing $listing */
            $listing = $form->getData();

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($listing);

                /** @var Image $image */
                foreach($listing->getImages() as $image) {
                    if (empty($image->getImageName())) {
                        $em->remove($image);
                    }
                }

                $em->flush();

                $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully saved.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving listing object.' . $e));
            }

			return $this->redirectToRoute('admin_listing_update', ['id' => $listing->getId()]);
		}

		return $this->render('AdminBundle::Listing/update.html.twig', [
			'listing' => $listing,
			'form' => $form->createView(),
		]);
	}
}