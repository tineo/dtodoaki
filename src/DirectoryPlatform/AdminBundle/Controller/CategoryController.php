<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AdminBundle\Form\Type\CategoryType;
use DirectoryPlatform\AppBundle\Helper\Hierarchy;
use DirectoryPlatform\AppBundle\Entity\Category;

class CategoryController extends Controller
{
	/**
	 * @Route("/categories", name="admin_category")
	 */
	public function indexAction(Request $request)
	{
		$categories = $this->getDoctrine()->getRepository('AppBundle:Category')->findParent();
		$categories = $this->get('knp_paginator')->paginate($categories, $request->query->getInt('page', 1), 10);

		return $this->render('AdminBundle::Category/index.html.twig', [
			'hierarchy' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
			'categories' => $categories
		]);
	}

	/**
	 * @Route("/categories/delete/{id}", name="admin_category_delete", requirements={"id": "\d+"})
	 * @ParamConverter("category", class="DirectoryPlatform\AppBundle\Entity\Category")
	 */
	public function deleteAction(Request $request, Category $category)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($category);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Category has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting category object.'));
		}

		return $this->redirectToRoute('admin_category');
	}

	/**
	 * @Route("/categories/update/{id}", name="admin_category_update", requirements={"id": "\d+"})
	 * @ParamConverter("category", class="DirectoryPlatform\AppBundle\Entity\Category")
	 */
	public function updateAction(Request $request, Category $category)
	{
		$hierarchy = new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories');

		$form = $this->createForm(CategoryType::class, $category, ['hierarchy' => $hierarchy]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Category $category */
			$category = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Category has been successfully saved.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving category object.'));
			}

			return $this->redirectToRoute('admin_category');
		}

		return $this->render('AdminBundle::Category/update.html.twig', [
			'category' => $category,
			'form' => $form->createView()
		]);
	}

	/**
	 * @Route("/categories/create", name="admin_category_create")
	 */	
	public function createAction(Request $request) {
		$category = new Category();
		$hierarchy = new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories');

		$form = $this->createForm(CategoryType::class, $category, ['hierarchy' => $hierarchy]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Category $category */
			$category = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($category);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Category has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating category object.'));
			}

			return $this->redirectToRoute('admin_category');
		}

		return $this->render('AdminBundle::Category/create.html.twig', ['form' => $form->createView()]);
	}
}