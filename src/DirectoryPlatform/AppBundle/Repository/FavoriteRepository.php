<?php

namespace DirectoryPlatform\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

use DirectoryPlatform\AppBundle\Entity\User;

class FavoriteRepository extends EntityRepository
{
    public function findAllForUser(User $user)
    {
        $qb = $this->createQueryBuilder('favorite');

        return $qb->innerJoin('favorite.listing', 'listing')
            ->andWhere('favorite.user = :user')
            ->andWhere('listing.isPublished = 1')
            ->orderBy('favorite.created', 'DESC')
            ->orderBy('favorite.id', 'DESC')
            ->setParameter('user', $user)
            ->getQuery()
            ->execute();
    }
}