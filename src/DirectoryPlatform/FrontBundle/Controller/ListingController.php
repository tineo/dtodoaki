<?php

namespace DirectoryPlatform\FrontBundle\Controller;

use DirectoryPlatform\AppBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use DirectoryPlatform\AppBundle\Entity\Inquire;
use DirectoryPlatform\AppBundle\Entity\Listing;
use DirectoryPlatform\AppBundle\Entity\Rating;
use DirectoryPlatform\AppBundle\Entity\Review;
use DirectoryPlatform\AppBundle\Helper\Hierarchy;
use DirectoryPlatform\FrontBundle\Form\Type\FilterType;
use DirectoryPlatform\FrontBundle\Form\Type\InquireType;
use DirectoryPlatform\FrontBundle\Form\Type\ListingType;
use DirectoryPlatform\FrontBundle\Form\Type\ReviewType;

class ListingController extends Controller
{
	/**
	 * @Route("/listings", name="listing")
	 */
	public function indexAction(Request $request)
	{
        $listings = $this->getDoctrine()->getRepository('AppBundle:Listing')->findByFilterQuery($request);        
        $listings = $this->get('knp_paginator')->paginate($listings, $request->query->getInt('page', 1), 10);                

		$filter = $this->createForm(FilterType::class, [], [
			'router' => $this->get('router'),
			'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
			'hierarchy_locations' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Location'), 'location', 'locations'),
		]);
		$filter->handleRequest($request);

        $response = $this->render('FrontBundle::Listing/index.html.twig', [
        	'filter' => $filter->createView(),
        	'listings' => $listings,
        	'display' => !empty($request->query->get('display')) ? $request->query->get('display') : $request->cookies->get('display', 'grid'),
        ]);

		if ($request->query->get('display')) {
			if ('row' === $request->query->get('display')) {
				$response->headers->setCookie(new Cookie('display', 'row'));
			} else {
				$response->headers->setCookie(new Cookie('display', 'grid'));
			}
		}

        return $response;
	}

	/**
	 * @Route("/listings/{slug}", name="listing_detail")
	 * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
	 */
	public function detailAction(Request $request, Listing $listing)
	{
        /*var_dump($listing->getIsPublished());
		if (!$listing->getIsPublished()) {
			throw $this->createNotFoundException('Listing object does not exists.');
		}*/

		$form_inquire = $this->createForm(InquireType::class, new Inquire(), [
			'router' => $this->get('router'),
			'listing' => $listing,
		]);

		$form_review = $this->createForm(ReviewType::class, new Review(), ['user' => $this->getUser()]);
		$form_review->handleRequest($request);

		// @TODO: redirect review processing into ReviewController
		if ($form_review->isSubmitted() && $form_review->isValid()) {
			/** @var Review $review */
			$review = $form_review->getData();
			$review->setListing($listing);

			if ($this->getUser()) {
				$review->setUser($this->getUser());
			}

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($review);
				$em->flush();

				foreach (Rating::TYPES as $type) {
					if (!empty($form_review->get($type['id'])) && !empty($form_review->get($type['id'])->getData())) {
						$rating = new Rating();
						$rating->setType($type['id']);
						$rating->setMax($type['max']);
						$rating->setValue($form_review->get($type['id'])->getData());
						$rating->setReview($review);

						$em->persist($rating);
						$em->flush();
					}
				}

				$this->addFlash('success', $this->get('translator')->trans('Review has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating review object.' . $e));
			}

			return $this->redirectToRoute('listing_detail', ['slug' => $listing->getSlug()]);
		}

		return $this->render('FrontBundle::Listing/detail.html.twig', [
			'listing' => $listing,
			'reviews' => $this->getDoctrine()->getRepository('AppBundle:Review')->findForListing($listing->getId(), -1),
			'form_review' => $form_review->createView(),
			'form_inquire' => $form_inquire->createView(),
		]);
	}

	/**
	 * @Route("/account/listings", name="listing_my")
	 */
	public function myAction(Request $request)
	{
		$listings = $this->getDoctrine()->getRepository('AppBundle:Listing')->findByUser($this->getUser());
		$listings = $this->get('knp_paginator')->paginate($listings, $request->query->getInt('page', 1), 10);                

		return $this->render('FrontBundle::Listing/my.html.twig', [
			'listings' => $listings
		]);
	}

    /**
     * @Route("/account/listings/update/{id}", name="listing_update", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function updateAction(Request $request, Listing $listing)
    {
        if ($this->getUser() !== $listing->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to access this page.');
        }

        $form = $this->createForm(ListingType::class, $listing, [
            'currency' => $this->getParameter('app.currency'),
            'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
            'hierarchy_locations' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Location'), 'location', 'locations'),
        ]);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Listing $listing */
            $listing = $form->getData();

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($listing);

                /** @var Image $image */
                foreach($listing->getImages() as $image) {
                    if (empty($image->getImageName())) {
                        $em->remove($image);
                    }
                }

                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully saved.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving listing object.'));
            }

            return $this->redirectToRoute('listing_update', ['id' => $listing->getId()]);
        }

        return $this->render('FrontBundle::Listing/update.html.twig', [
            'listing' => $listing,
            'form' => $form->createView(),
        ]);
    }

	/**
	 * @Route("/account/listings/create", name="listing_create")
	 */
    public function createAction(Request $request)
    {
		$form = $this->createForm(ListingType::class, null, [
			'currency' => $this->getParameter('app.currency'),
			'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
			'hierarchy_locations' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Location'), 'location', 'locations'),
		]);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$listing = $form->getData();
			$listing->setUser($this->getUser());

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($listing);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Listing has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating listing object.'));
			}

			return $this->redirectToRoute('listing_my');
		}

		return $this->render('FrontBundle::Listing/create.html.twig', ['form'  => $form->createView()]);
    }

    /**
     * @Route("/account/listings/delete/{id}", name="listing_delete", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function deleteAction(Request $request, Listing $listing)
    {
        if ($this->getUser() !== $listing->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to access this page.');
        }

        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listing);
            $em->flush();
            $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully deleted.'));
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting listing object.'));
        }

        return $this->redirectToRoute('listing_my');
    }

    /**
     * @Route("/account/listings/publish/{id}", name="listing_publish", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function publishAction(Request $request, Listing $listing)
    {
        if ($this->getUser() !== $listing->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to access this page.');
        }

        $payments = $this->getParameter('app.payments');

        if ($payments['pay_for_publish']['enabled']) {
            $session = $request->getSession();

            if ($session->get('products')) {
                foreach ($session->get('products') as $product) {
                    if ($product['type'] == 'pay_for_publish' && $product['listing_id'] == $listing->getId()) {
                        $this->addFlash('danger', $this->get('translator')->trans('Product is already in cart.'));
                        return $this->redirectToRoute('listing_my');
                    }
                }
            }

            $product = [
                'type' => 'pay_for_publish',
                'listing_id' => $listing->getId(),
                'price' => $payments['pay_for_publish']['price'],
                'duration' => $payments['pay_for_publish']['duration'],
            ];

            if ($session->has('products')) {
                $products = $session->get('products');

                array_push($products, $product);
                $session->set('products', $products);
            } else {
                $session->set('products', [$product]);
            }

            $this->addFlash('success', $this->get('translator')->trans('Request for publishing listing has been added into cart.'));
        } else {
            $listing->setIsPublished(true);

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($listing);
                $em->flush();
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving listing object.'));
            }
        }

        return $this->redirectToRoute('listing_my');
    }

    /**
     * @Route("/account/listings/unpublish/{id}", name="listing_unpublish", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function unpublishAction(Request $request, Listing $listing)
    {
        if ($this->getUser() !== $listing->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to access this page.');
        }

        $listing->setIsPublished(false);

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listing);
            $em->flush();
            $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully unpublished.'));
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving listing object.'));
        }

        return $this->redirectToRoute('listing_my');
    }

    /**
     * @Route("/account/listings/feature/{id}", name="listing_feature", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function featureAction(Request $request, Listing $listing)
    {
        if ($this->getUser() !== $listing->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to access this page.');
        }

        $payments = $this->getParameter('app.payments');

        if ($payments['pay_for_featured']['enabled']) {
            $session = $request->getSession();

            if ($session->get('products')) {
                foreach ($session->get('products') as $product) {
                    if ($product['type'] == 'pay_for_featured' && $product['listing_id'] == $listing->getId()) {
                        $this->addFlash('danger', $this->get('translator')->trans('Product is already in cart.'));

                        return $this->redirectToRoute('listing_my');
                    }
                }
            }

            $product = [
                'type' => 'pay_for_featured',
                'listing_id' => $listing->getId(),
                'price' => $payments['pay_for_featured']['price'],
                'duration' => $payments['pay_for_featured']['duration'],
            ];

            if ($session->has('products')) {
                $products = $session->get('products');

                array_push($products, $product);
                $session->set('products', $products);
            } else {
                $session->set('products', [$product]);
            }

            $this->addFlash('success', $this->get('translator')->trans('Request for featuring listing has been added into cart.'));
        } else {
            $listing->setIsFeatured(true);

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($listing);
                $em->flush();

                $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully marked as featured.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving listing object.'));
            }
        }

        return $this->redirectToRoute('listing_my');
    }

    /**
     * @Route("/account/listings/unfeature/{id}", name="listing_unfeature", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="DirectoryPlatform\AppBundle\Entity\Listing")
     */
    public function unfeatureAction(Request $request, Listing $listing)
    {
        if ($this->getUser() !== $listing->getUser()) {
            throw $this->createAccessDeniedException('You are not allowed to access this page.');
        }

        $listing->setIsFeatured(false);

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listing);
            $em->flush();

            $this->addFlash('success', $this->get('translator')->trans('Featured sign has been successfully removed from listing.'));
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving listing object.'));
        }

        return $this->redirectToRoute('listing_my');
    }
}