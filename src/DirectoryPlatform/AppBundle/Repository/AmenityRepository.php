<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AmenityRepository extends EntityRepository
{
	public function findAll() {
		$qb = $this->createQueryBuilder('amenity');

		return $qb->orderBy('amenity.name', 'ASC')
		          ->getQuery()
		          ->execute();		
	}
}