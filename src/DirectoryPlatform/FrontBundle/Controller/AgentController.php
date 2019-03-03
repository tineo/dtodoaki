<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DirectoryPlatform\AppBundle\Entity\Amenity;
use DirectoryPlatform\AppBundle\Entity\User;

class AgentController extends Controller
{
    /**
     * @Route("/agent/{id}", name="agent", requirements={"id": "\d+"})
     * @ParamConverter("user", class="DirectoryPlatform\AppBundle\Entity\User")
     */
    public function indexAction(Request $request, User $user) {
        $listings = $this->get('knp_paginator')->paginate($user->getListings(), $request->query->getInt('page', 1), 9);

        return $this->render('FrontBundle::Agent/index.html.twig', [
            'listings' => $listings,
            'user' => $user
        ]);
    }
}