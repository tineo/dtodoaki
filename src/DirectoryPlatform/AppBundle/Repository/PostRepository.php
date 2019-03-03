<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    public function count($criteria = array())
    {
        $qb = $this->createQueryBuilder('post');

        return $qb
            ->select('count(post.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

	public function findAll() {
		$qb = $this->createQueryBuilder('post');

		return $qb->orderBy('post.created', 'DESC')
		          ->getQuery()
		          ->execute();
	}

	public function findRecent($count = -1, $published = true) {
		$qb = $this->createQueryBuilder('post');

		if ($published) {
			$qb->andWhere('post.isPublished = 1');
		}		

		if (-1 !== $count) {
			$qb->setMaxResults($count);
		}
		
		return $qb->orderBy('post.created', 'DESC')		          
		          ->getQuery()
		          ->execute();
	}
}