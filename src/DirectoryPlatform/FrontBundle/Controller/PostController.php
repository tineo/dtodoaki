<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Post;

class PostController extends Controller {
	/**
	 * @Route("/blog", name="post")
	 */
	public function indexAction(Request $request) {
        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll($request);        
        $posts = $this->get('knp_paginator')->paginate($posts, $request->query->getInt('page', 1), 10);                		

        return $this->render('FrontBundle::Post/index.html.twig', [
        	'posts' => $posts,
        ]);
	}

	/**
	 * @Route("/blog/{slug}", name="post_detail")
	 * @ParamConverter("post", class="DirectoryPlatform\AppBundle\Entity\Post")
	 */	
	public function detailAction(Request $request, Post $post) {
        return $this->render('FrontBundle::Post/detail.html.twig', [
        	'post' => $post,
        ]);
	}	
}