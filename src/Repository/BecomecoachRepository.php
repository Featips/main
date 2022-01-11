<?php

namespace App\Repository;

use App\Entity\Becomecoach;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Becomecoach|null find($id, $lockMode = null, $lockVersion = null)
 * @method Becomecoach|null findOneBy(array $criteria, array $orderBy = null)
 * @method Becomecoach[]    findAll()
 * @method Becomecoach[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BecomecoachRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Becomecoach::class);
    }

    // /**
    //  * @return Becomecoach[] Returns an array of Becomecoach objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Becomecoach
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
