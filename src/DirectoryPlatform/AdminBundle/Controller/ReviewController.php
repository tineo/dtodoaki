<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use DirectoryPlatform\AdminBundle\Form\Type\ReviewType;
use DirectoryPlatform\AppBundle\Entity\Rating;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AppBundle\Entity\Review;

class ReviewController extends Controller
{
	/**
	 * @Route("/reviews", name="admin_review")
	 */
	public function indexAction(Request $request) {
		$reviews = $this->getDoctrine()->getRepository('AppBundle:Review' )->findAll();
		$reviews = $this->get('knp_paginator' )->paginate( $reviews, $request->query->getInt('page', 1 ), 10);

		return $this->render('AdminBundle::Review/index.html.twig', ['reviews' => $reviews]);
	}

    /**
     * @Route("/reviews/publish/{id}", name="admin_review_publish", requirements={"id": "\d+"})
     * @ParamConverter("review", class="DirectoryPlatform\AppBundle\Entity\Review")
     */
	public function publishAction(Request $request, Review $review)
    {
        try {
            $review->setIsPublished(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();

            $this->addFlash('success', $this->get('translator')->trans('Review has been successfully published.'));
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when publishing review object.'));
        }

        return $this->redirectToRoute('admin_review');
    }

	/**
	 * @Route("/reviews/create", name="admin_review_create")
	 */
	public function createAction(Request $request) {
		$review = new Review();

		$form = $this->createForm(ReviewType::class, $review);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$review = $form->getData();
			$review->setUser($this->getUser());

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($review);
				$em->flush();

				foreach (Rating::TYPES as $type) {
					if (!empty($form->get($type['id']))) {
						$rating = new Rating();
						$rating->setType($type['id']);
						$rating->setMax($type['max']);
						$rating->setValue($form->get($type['id'])->getData());
						$rating->setReview($review);

						$em->persist($rating);
						$em->flush();
					}
				}

				$this->addFlash('success', $this->get('translator')->trans('Review has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating review object.'));
			}

			return $this->redirectToRoute('admin_review');
		}

		return $this->render('AdminBundle::Review/create.html.twig', ['form'  => $form->createView()]);
	}

	/**
	 * @Route("/reviews/delete/{id}", name="admin_review_delete", requirements={"id": "\d+"})
	 * @ParamConverter("review", class="DirectoryPlatform\AppBundle\Entity\Review")
	 */
	public function deleteAction(Request $request, Review $review)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($review);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Review has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting review object.'));
		}

		return $this->redirectToRoute('admin_review');
	}

	/**
	 * @Route("/reviews/update/{id}", name="admin_review_update", requirements={"id": "\d+"})
	 * @ParamConverter("review", class="DirectoryPlatform\AppBundle\Entity\Review")
	 */
	public function updateAction(Request $request, Review $review) {
		$form = $this->createForm(ReviewType::class, $review, [
			'user' => $review->getUser(),
			'ratings' => $review->getRatings(),
		]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Review $review */
			$review = $form->getData();

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($review);
				$em->flush();

				foreach (Rating::TYPES as $type) {
					if (!empty($form->get($type['id'])) && !empty($form->get($type['id'])->getData())) {
						$rating = $this->getDoctrine()->getRepository('AppBundle:Rating' )->findOneBy([
							'review' => $review->getId(),
							'type' => $type['id'],
						]);

//						$rating = new Rating();
						$rating->setType($type['id']);
						$rating->setMax($type['max']);
						$rating->setValue($form->get($type['id'])->getData());
						$rating->setReview($review);

						$em->persist($rating);
						$em->flush();
					}
				}

				$this->addFlash('success', $this->get('translator')->trans('Review has been successfully saved.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving review object.' . $e));
			}

			return $this->redirectToRoute('admin_review_update', ['id' => $review->getId()]);
		}

		return $this->render(
			'AdminBundle::Review/update.html.twig', [
				'review' => $review,
				'form' => $form->createView()
			]
		);
	}	
}