<?php

namespace App\Repository;

use App\Entity\Video;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Join;

/**
 * @method Video|null find($id, $lockMode = null, $lockVersion = null)
 * @method Video|null findOneBy(array $criteria, array $orderBy = null)
 * @method Video[]    findAll()
 * @method Video[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Video::class);
    }

    public function getTrend(){
        $start_week = date("Y-m-d",strtotime('monday this week'));
        $end_week = date("Y-m-d",strtotime('sunday this week'));

        return $this->createQueryBuilder('t')
        ->where('t.publication_date >= :start')
        ->andWhere('t.publication_date <= :end')
        ->setParameter('start',$start_week)                      
        ->setParameter('end',$end_week)
        ->getQuery()
        ->getResult(); 
    }
    public function getDiscover(){
        return $this->createQueryBuilder('t')
        ->getQuery()
        ->getResult(); 
    }

    public function getAll(string $param){
        if ($param != ""){
            return $this->createQueryBuilder('t')
            ->orderBy('t.publication_date','DESC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult(); 
        }else{
            return $this->createQueryBuilder('t')
            ->orderBy('t.publication_date','DESC')
            ->getQuery()
            ->getResult(); 
        }
    }
    
    public function searchVideo($term)
    {
        return $this->createQueryBuilder('cat')
            ->where('cat.name LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$term.'%')
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return Video[] Returns an array of Video objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Video
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
