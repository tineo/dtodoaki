<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use DirectoryPlatform\FrontBundle\Form\Type\ProfileType;
use Doctrine\Common\Collections\ArrayCollection;
use DirectoryPlatform\AppBundle\Entity\Profile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller {
	/**
	 * @Route("/account/profile", name="profile_update")
	 */
	public function updateGeneralAction(Request $request)
	{
		$profile = $this->getDoctrine()->getRepository('AppBundle:Profile')->findOneBy(
			['user' => $this->getUser()->getId()]
		);

		$form = $this->createForm( ProfileType::class, $profile );
		$form->handleRequest( $request );

		if ( $form->isSubmitted() && $form->isValid() ) {
			$profile = $form->getData();
			$profile->setUser( $this->getUser() );

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist( $profile );
				$em->flush();
				$this->addFlash( 'success', $this->get( 'translator' )->trans( 'Profile has been successfully saved.' ) );
			} catch ( \Exception $e ) {
				$this->addFlash( 'danger', $this->get( 'translator' )->trans( 'An error occurred when saving object.' ) );
			}


			return $this->redirectToRoute( 'profile_update' );
		}

		return $this->render( 'FrontBundle::Profile/update.html.twig', [ 'form' => $form->createView() ] );
	}
}