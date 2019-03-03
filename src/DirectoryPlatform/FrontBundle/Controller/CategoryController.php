<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Category;

class CategoryController extends Controller
{
	/**
	 * @Route("/categories", name="category")
	 */	
	public function indexAction(Request $request) {
        $categories = $this->getDoctrine()->getRepository('AppBundle:Category')->findAll();
        $categories = $this->get('knp_paginator')->paginate($categories, $request->query->getInt('page', 1), 10);

        return $this->render('FrontBundle::Category/index.html.twig', ['categories' => $categories]);
	}

	/**
	 * @Route("/categories/{slug}", name="category_detail")
	 * @ParamConverter("category", class="DirectoryPlatform\AppBundle\Entity\Category")
	 */
	public function detailAction(Request $request, Category $category) {
        return $this->render('FrontBundle::Category/detail.html.twig', [
        	'category' => $category,
        	'listings' => $category->getListings(),
        ]);
	}
}