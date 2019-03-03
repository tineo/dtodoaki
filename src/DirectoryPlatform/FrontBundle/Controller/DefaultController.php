<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use DirectoryPlatform\AppBundle\Helper\Hierarchy;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\FrontBundle\Form\Type\FilterHeroType;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		$filter = $this->createForm(FilterHeroType::class, [], [
			'router' => $this->get('router'),
			'hierarchy' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
		]);

		return $this->render(
			'FrontBundle::Front/index.html.twig', [
				'filter' => $filter->createView(),
				'locations' => $this->getDoctrine()->getRepository('AppBundle:Location')->findParent(),
				'categories' => $this->getDoctrine()->getRepository('AppBundle:Category')->findParent(),
				'categories_popular' => $this->getDoctrine()->getRepository('AppBundle:Category')->findPopular(),
				'posts' => $this->getDoctrine()->getRepository('AppBundle:Post')->findRecent(3),
				'listings' => $this->getDoctrine()->getRepository('AppBundle:Listing')->findRecent(6),
			]
		);
	}
}