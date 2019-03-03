<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use DirectoryPlatform\AdminBundle\Form\Type\UserType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Model\UserInterface;

use DirectoryPlatform\AppBundle\Entity\User;

class UserController extends Controller
{
	/**
	 * @Route("/users", name="admin_user")
	 */
	public function indexAction(Request $request) {
		$users = $this->getDoctrine()->getRepository('AppBundle:User' )->findAll();
		$users = $this->get('knp_paginator' )->paginate( $users, $request->query->getInt('page', 1 ), 10);

		return $this->render('AdminBundle::User/index.html.twig', ['users' => $users]);
	}

	/**
	 * @Route("/users/create", name="admin_user_create")
	 */
	public function createAction(Request $request) {
		$userManager = $this->container->get('fos_user.user_manager');
		/** @var User $user */
		$user = $userManager->createUser();

		$form = $this->createForm(UserType::class, null);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			try {
				$user->setUsername($form->get('username')->getData());
				$user->setEmail($form->get('username')->getData());
				$user->setPlainPassword($form->get('password')->getData());
				$user->setEnabled($form->get('enabled')->getData());

				$userManager->updateUser($user);
				$this->addFlash('success', $this->get('translator')->trans('User has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating user object.'));
			}

			return $this->redirectToRoute('admin_user');
		}

		return $this->render('AdminBundle::User/create.html.twig', ['form'  => $form->createView()]);
	}

	/**
	 * @Route("/users/delete/{id}", name="admin_user_delete", requirements={"id": "\d+"})
	 * @ParamConverter("user", class="DirectoryPlatform\AppBundle\Entity\User")
	 */
	public function deleteAction(Request $request, User $user)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($user);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('User has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting user object.'));
		}

		return $this->redirectToRoute('admin_user');
	}

	/**
	 * @Route("/users/update/{id}", name="admin_user_update", requirements={"id": "\d+"})
	 * @ParamConverter("user", class="DirectoryPlatform\AppBundle\Entity\User")
	 */
	public function updateAction(Request $request, User $user) {
		$userManager = $this->container->get('fos_user.user_manager');
		/** @var User $user */
//		$user = $userManager->createUser();

		$form = $this->createForm(UserType::class, $user, [
			'password_required' => false,
		]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			try {
				$user->setUsername($form->get('username')->getData());
				$user->setEmail($form->get('username')->getData());
				$user->setEnabled($form->get('enabled')->getData());

				if (!empty($form->get('password'))) {
					$user->setPlainPassword($form->get('password')->getData());
				}

				$userManager->updateUser($user);
				$this->addFlash('success', $this->get('translator')->trans('User has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating user object.'));
			}

			return $this->redirectToRoute('admin_user');
		}

		return $this->render('AdminBundle::User/update.html.twig', [
			'user'  => $user,
			'form'  => $form->createView()
		]);
	}
}