<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Inquire;
use DirectoryPlatform\AppBundle\Entity\Listing;
use DirectoryPlatform\FrontBundle\Form\Type\InquireType;

class InquireController extends Controller
{
	/**
	 * @Route("/inquire/{id}", name="inquire", requirements={"id": "\d+"})
	 * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
	 */
	public function inquireAction(Request $request, Listing $listing) 
	{
		$form = $this->createForm(InquireType::class, new Inquire(), [
			'router' => $this->get('router'),
			'listing' => $listing,
		]);
		
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$inquire = $form->getData();
			$inquire->setListing($listing);

			if ($this->getUser()) {
				$inquire->setUser($this->getUser());
			}

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($inquire);
				$em->flush();

		        $message = \Swift_Message::newInstance()
		            ->setSubject('['.$this->container->getParameter('app.project_name').'] Inquire')
		            ->setFrom($this->container->getParameter('app.email_from'))
		            ->setTo($inquire->getListing()->getUser()->getEmail())
		            ->setBody($this->renderView('FrontBundle::Email/inquire.html.twig', [
		                'inquire' => $inquire		                        
		            ]), 'text/html');
				$this->container->get('mailer')->send($message);

				$this->addFlash('success', $this->get('translator')->trans('Inquire has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating inquire object.' . $e));
			}			
		}

		return $this->redirectToRoute('listing_detail', ['slug' => $listing->getSlug()]);
	}
}