<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DashboardController extends Controller
{
	/**
	 * @Route("/", name="admin_dashboard")
	 */
	public function indexAction(Request $request)
	{

		return $this->render(
			'AdminBundle::Dashboard/index.html.twig', [
				'listings' => $this->getDoctrine()->getRepository('AppBundle:Listing')->findRecent(6, false),
				'posts' => $this->getDoctrine()->getRepository('AppBundle:Post')->findRecent(6, false),
				'listings_count' => $this->getDoctrine()->getRepository('AppBundle:Listing')->count(),
				'users_count' => $this->getDoctrine()->getRepository('AppBundle:User')->count(),
				'reviews_count' => $this->getDoctrine()->getRepository('AppBundle:Review')->count(),
				'posts_count' => $this->getDoctrine()->getRepository('AppBundle:Post')->count(),
			]
		);
	}
}