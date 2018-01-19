<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Workshop;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class WorkshopRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Workshop::class);
    }

    /**
     * On homepage we first 10 active workshops.
     *
     * @return Workshop[]
     */
    public function findAllWorkshopsForHomepage(): array
    {
        return $this->createQueryBuilder('w')
            ->where('w.active = :active')
            ->setParameter('active', true)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    /**
     * On workshop page, we are showing 'similar' workshops.
     *
     * For now it's hardcoded just to show 2 active workshops with current one excluded.
     *
     * @return Workshop[]
     */
    public function findSimilarWorkshops(Workshop $workshop): array
    {
        return $this->createQueryBuilder('w')
            ->where('w.active = :active')
            ->andWhere('w.id != :id')
            ->setParameter('active', true)
            ->setParameter('id', $workshop->getId())
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(2)
            ->getQuery()
            ->getResult();
    }
}
