<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Favorite;
use DirectoryPlatform\AppBundle\Entity\Listing;

class FavoriteController extends Controller
{
    /**
     * @Route("/account/favorites", name="favorite")
     */
    public function indexAction(Request $request)
    {
        $favorites = $this->getDoctrine()->getRepository('AppBundle:Favorite')->findAllForUser($this->getUser());
        $favorites = $this->get('knp_paginator')->paginate($favorites, $request->query->getInt('page', 1), 10);

        return $this->render('FrontBundle::Favorite/index.html.twig', [
            'favorites' => $favorites,
        ]);
    }

    /**
     * @Route("/favorites/add/{id}", name="favorite_add", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function addAction(Request $request, Listing $listing)
    {
        // User authenticated
        if (!$this->getUser()) {
            $this->addFlash('error', $this->get('translator')->trans('Please log in before adding listing to favorite list.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }

        // Listing Exists
        if (!$listing) {
            $this->addFlash('error', $this->get('translator')->trans('Listing does not exists.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }

        // Favorite exists
        $favorite = $this->getDoctrine()->getRepository('AppBundle:Favorite')->findOneBy([
            'user' => $this->getUser()->getId(),
            'listing' => $listing->getId(),
        ]);

        if ($favorite) {
            $this->addFlash('error', $this->get('translator')->trans('Listing is already added in your favorite list.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }

        $favorite = new Favorite();
        $favorite->setUser($this->getUser());
        $favorite->setListing($listing);

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($favorite);
            $em->flush();

            $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully added to your favorites.'));
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving object.'));
        }

        return $this->redirect($request->server->get('HTTP_REFERER'));
    }

    /**
     * @Route("/account/favorites/delete/{id}", name="favorite_remove", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function deleteAction(Request $request, Listing $listing)
    {
        // User authenticated
        if (!$this->getUser()) {
            $this->addFlash('error', $this->get('translator')->trans('Please log in before adding Listing to favorite list.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }

        // Listing exists
        if (!$listing) {
            $this->addFlash('error', $this->get('translator')->trans('Listing does not exists.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }

        // Favorite exists
        $favorite = $this->getDoctrine()->getRepository('AppBundle:Favorite')->findOneBy([
            'user' => $this->getUser()->getId(),
            'listing' => $listing->getId(),
        ]);

        if ($favorite->getUser() != $this->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to access this page.');
        }

        if (!$favorite) {
            $this->addFlash('error', $this->get('translator')->trans('Listing is not in your favorite list.'));
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }

        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($favorite);
            $em->flush();

            $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully removed from your favorites.'));
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving object.'));
        }


        return $this->redirect($request->server->get('HTTP_REFERER'));
    }
}