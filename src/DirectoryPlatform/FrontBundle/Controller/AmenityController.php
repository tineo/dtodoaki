<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Amenity;

class AmenityController extends Controller
{
	/**
	 * @Route("/amenities", name="amenity")
	 */	
	public function indexAction(Request $request) {
        $amenities = $this->getDoctrine()->getRepository('AppBundle:Amenity')->findAll();
        $amenities = $this->get('knp_paginator')->paginate($amenities, $request->query->getInt('page', 1), 10);

        return $this->render('FrontBundle::Amenity/index.html.twig', ['amenities' => $amenities]);
	}

	/**
	 * @Route("/amenities/{slug}", name="amenity_detail")
	 * @ParamConverter("amenity", class="DirectoryPlatform\AppBundle\Entity\Amenity")
	 */
	public function detailAction(Request $request, Amenity $amenity) {
        return $this->render('FrontBundle::Amenity/detail.html.twig', [
        	'amenity' => $amenity,
        	'listings' => $amenity->getListings(),
        ]);
	}
}