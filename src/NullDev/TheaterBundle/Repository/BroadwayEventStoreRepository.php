<?php

declare(strict_types=1);

namespace NullDev\TheaterBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use NullDev\TheaterBundle\Entity\BroadwayEventStore;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Doctrine repository to access broadway_events.
 */
class BroadwayEventStoreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BroadwayEventStore::class);
    }

    public function findAfter(int $id): array
    {
        $result = $this->createQueryBuilder('bes')
            ->where('bes.id > :id')
            ->setParameter(':id', $id)
            ->getQuery()
            ->getResult();

        return $result;
    }

    public function getLastIdUsed(): int
    {
        $result = $this->createQueryBuilder('bes')
            ->orderBy('bes.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if ($result) {
            return $result->getId();
        }

        return 0;
    }
}
