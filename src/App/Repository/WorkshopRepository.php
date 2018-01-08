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
            ->where('w.active = :value')
            ->setParameter('value', true)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
}
