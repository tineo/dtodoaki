<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
	public function findParent() 
	{
		$qb = $this->createQueryBuilder('category');

		return $qb->andWhere('category.category is NULL')
				  ->orderBy('category.name', 'ASC')
		          ->getQuery()
		          ->execute();
	}

	public function findPopular($count = 6) 
	{
		$qb = $this->createQueryBuilder('category')
				   ->andWhere('category.category is NULL')
				   ->innerJoin('category.listings', 'listings')
				   ->addSelect('COUNT(listings) as listings_count')
				   ->groupBy('category.id')
				   ->orderBy('listings_count', 'DESC');

		if (-1 !== $count) {
			$qb->setMaxResults($count);
		}

		$categories = [];
		$results = $qb->getQuery()->execute();		

		foreach ($results as $value) {
			$categories[] = $value[0];
		}

		return $categories;
	}
}