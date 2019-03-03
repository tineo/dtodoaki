<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Claim;
use DirectoryPlatform\AppBundle\Entity\Listing;
use DirectoryPlatform\FrontBundle\Form\Type\ClaimType;

class ClaimController extends Controller
{
	/**
	 * @Route("/claims/create/{id}", name="claim_create", requirements={"id": "\d+"})
	 * @ParamConverter("Listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
	 */
	public function createAction(Request $request, Listing $listing) {
        // User authenticated
        if (!$this->getUser()) {
            $this->addFlash('error', $this->get('translator')->trans('Please log in before claiming.'));

            return $this->redirectToRoute('listing_detail', [
                'slug' => $listing->getSlug(),
            ]);
        }

        // TODO: can not claim for not published listing
        
       	// Is listing claimed?
        $claim = $this->getDoctrine()->getRepository('AppBundle:Claim')->findOneBy([
            'listing' => $listing->getId(),
            'isApproved' => true,
        ]);

        if ($claim) {
            $this->addFlash('error', $this->get('translator')->trans('Listing is claimed.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }  
        
       	// User already claimed
        $claim = $this->getDoctrine()->getRepository('AppBundle:Claim')->findOneBy([
            'user' => $this->getUser()->getId(),
            'listing' => $listing->getId(),
        ]);

        if ($claim) {
            $this->addFlash('error', $this->get('translator')->trans('You have already claimed for listing.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }        

		$form = $this->createForm(ClaimType::class, new Claim());
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$claim = $form->getData();
			$claim->setUser($this->getUser());
			$claim->setListing($listing);

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($claim);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('You have successfully claimed for listing.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating when claiming for listing.'));
			}

			return $this->redirectToRoute('listing_detail', [
				'slug' => $listing->getSlug(),
			]);
		}

		return $this->render('FrontBundle::Claim/create.html.twig', [
			'form' => $form->createView(),
		]);		
	}
}