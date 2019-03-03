<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InquireRepository extends EntityRepository
{
	public function findAll() 
    {
		$qb = $this->createQueryBuilder('inquire');

		return $qb->orderBy('inquire.created', 'DESC')
		          ->getQuery()
		          ->execute();
	}	
}