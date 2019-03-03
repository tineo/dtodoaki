<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Location;

class LocationController extends Controller
{
	/**
	 * @Route("/locations", name="location")
	 */	
	public function indexAction(Request $request) {
        $locations = $this->getDoctrine()->getRepository('AppBundle:Location')->findAll();
        $locations = $this->get('knp_paginator')->paginate($locations, $request->query->getInt('page', 1), 10);

        return $this->render('FrontBundle::Location/index.html.twig', ['locations' => $locations]);
	}

	/**
	 * @Route("/locations/{slug}", name="location_detail")
	 * @ParamConverter("location", class="DirectoryPlatform\AppBundle\Entity\Location")
	 */
	public function detailAction(Request $request, Location $location) {
        return $this->render('FrontBundle::Location/detail.html.twig', [
        	'location' => $location,
        	'listings' => $location->getListings(),
        ]);
	}
}