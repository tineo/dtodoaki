<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ReviewRepository extends EntityRepository
{
    public function count($criteria = array())
    {
        $qb = $this->createQueryBuilder('review');

        return $qb
            ->select('count(review.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

	public function findAll() {
		$qb = $this->createQueryBuilder('review');

		return $qb->orderBy('review.created', 'DESC')
		          ->getQuery()
		          ->execute();
	}

	public function findForListing($listing_id, $count = 10) {
		$qb = $this->createQueryBuilder('review');
		$qb->andWhere('review.isPublished = 1')
		   ->andWhere('review.listing = :listing')
		   ->orderBy('review.created', 'DESC')
		   ->setParameters([
				'listing' => $listing_id,
		   ]);

		if ($count !== -1) {
			$qb->setMaxResults($count);
		}

		return $qb->getQuery()
		          ->execute();
	}
}