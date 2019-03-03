<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Report;
use DirectoryPlatform\AppBundle\Entity\Listing;
use DirectoryPlatform\FrontBundle\Form\Type\ReportType;

class ReportController extends Controller
{
    /**
     * @Route("/reports/create/{id}", name="report_create", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function createAction(Request $request, Listing $listing)
    {
        // User authenticated
        if (!$this->getUser()) {
            $this->addFlash('error', $this->get('translator')->trans('Please log in before reporting.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }
        
        // User already claimed
        $report = $this->getDoctrine()->getRepository('AppBundle:Report')->findOneBy([
            'user' => $this->getUser()->getId(),
            'listing' => $listing->getId(),
        ]);

        if ($report) {
            $this->addFlash('error', $this->get('translator')->trans('You have already reported listing.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }        

        $form = $this->createForm(ReportType::class, new Report());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $report = $form->getData();
            $report->setUser($this->getUser());
            $report->setListing($listing);

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($report);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('You have successfully reported listing.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating when reporting listing.'));
            }

            return $this->redirectToRoute('listing_detail', [
                'slug' => $listing->getSlug(),
            ]);
        }

        return $this->render('FrontBundle::Report/create.html.twig', [
            'form' => $form->createView(),
        ]); 
    }
}