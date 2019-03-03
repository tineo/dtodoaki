<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Subscriber;
use DirectoryPlatform\FrontBundle\Form\Type\SubscriberType;

class SubscriberController extends Controller
{
	public function formAction(Request $request)
	{
		$form = $this->createForm(SubscriberType::class, new Subscriber(), [
			'router' => $this->get('router'),
		]);

		return $this->render('FrontBundle::Subscriber/form.html.twig', [			
			'form' => $form->createView(),			
		]);
	}

	/**
	 * @Route("/subscriber/subscribe", name="subscriber_subscribe")
	 */
	public function subscribeAction(Request $request) 
	{ 		
		$form = $this->createForm(SubscriberType::class, new Subscriber(), ['router' => $this->get('router')]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$subscriber = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($subscriber);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Subscriber has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating subscriber object.'));
			}
		}

		return $this->redirectToRoute('homepage');
	}
}