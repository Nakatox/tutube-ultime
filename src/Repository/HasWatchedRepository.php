<?php

namespace App\Repository;

use App\Entity\HasWatched;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HasWatched|null find($id, $lockMode = null, $lockVersion = null)
 * @method HasWatched|null findOneBy(array $criteria, array $orderBy = null)
 * @method HasWatched[]    findAll()
 * @method HasWatched[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HasWatchedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HasWatched::class);
    }

    // /**
    //  * @return HasWatched[] Returns an array of HasWatched objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HasWatched
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
