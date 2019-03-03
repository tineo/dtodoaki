<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use DirectoryPlatform\AdminBundle\Form\Type\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AppBundle\Helper\Hierarchy;
use DirectoryPlatform\AppBundle\Entity\Post;

class PostController extends Controller
{
	/**
	 * @Route("/posts", name="admin_post")
	 */
	public function indexAction(Request $request)
	{
		$posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();
		$posts = $this->get('knp_paginator')->paginate($posts, $request->query->getInt('page', 1), 10);
		return $this->render('AdminBundle::Post/index.html.twig', ['posts' => $posts]);
	}

	/**
	 * @Route("/posts/create", name="admin_post_create")
	 */
	public function createAction(Request $request) {
		$post = new Post();

		$form = $this->createForm(PostType::class, $post, [
			'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
		]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$post = $form->getData();
			$post->setUser($this->getUser());

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($post);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Post has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating post object.'));
			}

			return $this->redirectToRoute('admin_post');
		}

		return $this->render('AdminBundle::Post/create.html.twig', ['form'  => $form->createView()]);
	}

	/**
	 * @Route("/posts/delete/{id}", name="admin_post_delete", requirements={"id": "\d+"})
	 * @ParamConverter("post", class="DirectoryPlatform\AppBundle\Entity\Post")
	 */
	public function deleteAction(Request $request, Post $post)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($post);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Post has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting post object.'));
		}

		return $this->redirectToRoute('admin_post');
	}

	/**
	 * @Route("/posts/update/{id}", name="admin_post_update", requirements={"id": "\d+"})
	 * @ParamConverter("post", class="DirectoryPlatform\AppBundle\Entity\Post")
	 */
	public function updateAction(Request $request, Post $post) {
		$form = $this->createForm(PostType::class, $post, [
			'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
		]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Post $post */
			$post = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($post);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Post has been successfully saved.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving post object.' . $e));
			}

			return $this->redirectToRoute('admin_post_update', ['id' => $post->getId()]);
		}

		return $this->render(
			'AdminBundle::Post/update.html.twig', [
				'post' => $post,
				'form' => $form->createView()
			]
		);
	}
}