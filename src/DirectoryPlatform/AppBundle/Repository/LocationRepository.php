<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LocationRepository extends EntityRepository
{
	public function findParent() {
		$qb = $this->createQueryBuilder('location');

		return $qb->andWhere('location.location is NULL')
		          ->getQuery()
		          ->execute();
	}
}