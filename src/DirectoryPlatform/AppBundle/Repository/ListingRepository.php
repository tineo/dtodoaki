<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ListingRepository extends EntityRepository
{
    public function count($criteria = array())
    {
        $qb = $this->createQueryBuilder('listing');

        return $qb
            ->select('count(listing.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

	public function findAll() 
    {
		$qb = $this->createQueryBuilder('listing');

		return $qb->orderBy('listing.created', 'DESC')
		          ->getQuery()
		          ->execute();
	}

    public function unfeature()
    {
        $qb = $this->createQueryBuilder('listing');

        return $qb->update()
            ->set('listing.isFeatured', '0')
            ->andWhere('listing.featuredUntil > CURRENT_TIMESTAMP()')
            ->getQuery()
            ->execute();
    }

    public function unpublish()
    {
        $qb = $this->createQueryBuilder('listing');

        return $qb->update()
            ->set('listing.isPublished', '0')
            ->andWhere('listing.publishedUntil > CURRENT_TIMESTAMP()')
            ->getQuery()
            ->execute();
    }

    public function findByUser(\DirectoryPlatform\AppBundle\Entity\User $user)
    {
        if (!$user) {
            return false;
        }

        $qb = $this->createQueryBuilder('listing');

        return $qb->andWhere('listing.user = :user')
            ->setParameter('user', $user)
            ->orderBy('listing.created', 'DESC')
            ->addOrderBy('listing.id', 'DESC')
            ->getQuery()
            ->execute();
    }

	public function findRecent($count = -1, $published = true) 
    {
		$qb = $this->createQueryBuilder('listing');

        if ($published) {
            $qb->andWhere('listing.isPublished = 1');
        }		

		if (-1 !== $count) {
		    $qb->setMaxResults($count);
		}

		return $qb->orderBy('listing.created', 'DESC')
                  ->getQuery()
                  ->execute();
	}

    public function findByFilterQuery($request)
    {
        $qb = $this->createQueryBuilder('listing');
        $qb->andWhere('listing.isPublished = 1');

        // Radius search
        if (!empty($request->query->get('radius_enabled')) && 
            !empty($request->query->get('place_latitude')) 
            && !empty($request->query->get('place_longitude'))) {

            $radius_km = 6371;
            $radius_mi = 3959;
            $distance = !empty($request->query->get('radius')) ? $request->query->get('radius') : 25;

            $qb->andWhere(
                '(' . $radius_km . ' * acos(cos(radians(' . $request->query->get('place_latitude') . '))' .
                    '* cos(radians(listing.latitude))' .
                    '* cos(radians(listing.longitude)' .
                    '- radians(' . $request->query->get('place_longitude') . '))' .
                    '+ sin(radians(' . $request->query->get('place_latitude') . '))' .
                    '* sin(radians(listing.latitude)))) < :distance'
            )->setParameter('distance', $distance);
        }

        // Keyword
        if (!empty($request->query->get('keyword'))) {
            $qb->andWhere('listing.name LIKE :filterKeyword OR listing.description LIKE :filterKeyword')
                ->setParameter('filterKeyword', '%'.$request->query->get('keyword').'%');
        }

        // Price from
        if (!empty($request->query->get('price_enabled'))) {            
            if (!empty($request->query->get('price_from'))) { 
                if (0 != $request->query->get('price_from')) {                    
                    $qb->andWhere('listing.price >= :priceFrom')
                        ->setParameter('priceFrom', $request->query->get('price_from'));
                }
            }

            // Price to
            if (!empty($request->query->get('price_to'))) {
                if (0 != $request->query->get('price_from')) {
                    $qb->andWhere('listing.price <= :priceTo')
                        ->setParameter('priceTo', $request->query->get('price_to'));
                } else {
                    $qb->andWhere('listing.price <= :priceTo OR listing.price IS NULL')
                        ->setParameter('priceTo', $request->query->get('price_to'));
                }
            }
        }

        // Category
        if (!empty($request->query->get('category'))) {
            $qb->leftJoin('listing.category', 'category')
                ->andWhere('category.id = :category')
                ->setParameter('category', $request->query->get('category'));
        }

        $results = $qb->addOrderBy('listing.isFeatured', 'DESC')
            ->addOrderBy('listing.created', 'DESC')
            ->getQuery()
            ->execute();

        
        return $results;
    }	
}