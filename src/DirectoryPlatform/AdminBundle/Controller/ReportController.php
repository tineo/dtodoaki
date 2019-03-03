<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use DirectoryPlatform\AdminBundle\Form\Type\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AppBundle\Entity\Report;

class ReportController extends Controller
{
	/**
	 * @Route("/reports", name="admin_report")
	 */
	public function indexAction(Request $request)
	{
		$reports = $this->getDoctrine()->getRepository('AppBundle:Report')->findAll();
		$reports = $this->get('knp_paginator')->paginate($reports, $request->query->getInt('page', 1), 10);
		return $this->render('AdminBundle::Report/index.html.twig', ['reports' => $reports]);
	}

	/**
	 * @Route("/reports/approve/{id}", name="admin_report_approve", requirements={"id": "\d+"})
	 * @ParamConverter("report", class="DirectoryPlatform\AppBundle\Entity\Report")
	 */
	public function approveAction(Request $request, Report $report) 
	{
		if ($report->getIsApproved()) {
			$this->addFlash('danger', $this->get('translator')->trans('Report is already approved.'));
		}

		try {
			$report->setIsApproved(true);
			$report->getListing()->setIsPublished(false);
			$em = $this->getDoctrine()->getManager();
			$em->persist($report);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('You have successfully approved report.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when approving report.'));
		}

		return $this->redirectToRoute('admin_report');
	}	
}