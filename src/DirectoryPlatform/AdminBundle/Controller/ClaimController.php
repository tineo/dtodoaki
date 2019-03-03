<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AppBundle\Entity\Claim;

class ClaimController extends Controller
{
	/**
	 * @Route("/claims", name="admin_claim")
	 */
	public function indexAction(Request $request)
	{
		$claims = $this->getDoctrine()->getRepository('AppBundle:Claim')->findAll();
		$claims = $this->get('knp_paginator')->paginate($claims, $request->query->getInt('page', 1), 10);

		return $this->render('AdminBundle::Claim/index.html.twig', ['claims' => $claims]);
	}

	/**
	 * @Route("/claims/approve/{id}", name="admin_claim_approve", requirements={"id": "\d+"})
	 * @ParamConverter("claim", class="DirectoryPlatform\AppBundle\Entity\Claim")
	 */
	public function approveAction(Request $request, Claim $claim) 
	{
		if ($claim->getIsApproved()) {
			$this->addFlash('danger', $this->get('translator')->trans('Claim is already approved.'));
		}

		try {
			$claim->setIsApproved(true);
			$claim->getListing()->setUser($claim->getUser());
			$em = $this->getDoctrine()->getManager();
			$em->persist($claim);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('You have successfully approved claim.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when approving claim.'));
		}

		return $this->redirectToRoute('admin_claim');
	}
}