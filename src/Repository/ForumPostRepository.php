<?php

namespace App\Repository;

use App\Entity\ForumPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;


/**
 * @method ForumPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method ForumPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method ForumPost[]    findAll()
 * @method ForumPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumPostRepository extends ServiceEntityRepository
{

    private $entityManager;
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, ForumPost::class);
        $this->entityManager = $entityManager;
    }

    // /**
    //  * @return ForumPost[] Returns an array of ForumPost objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()

        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ForumPost
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
     
    // public function findByMyCategory()
    // {
    //    $entityManager=$this->getEntityManager();
    //     $dql = 'SELECT ft.id FROM forum_topic ft INNER JOIN forum_topic_forum_category ON forum_topic.id = forum_topic_forum_category.forum_topic_id WHERE forum_topic_id = 1';

    //     $query=$this->getEntityManager()->createQuery($dql);

    //     return $query->execute();

       /*$query = $entityManager->createQuery( 'SELECT ft.id FROM forum_topic ft INNER JOIN forum_topic_forum_category ON forum_topic.id = forum_topic_forum_category.forum_topic_id WHERE forum_topic_id = 1' );

       return $query->getResult();*/
       /*return $this->createQueryBuilder('f')
       ->select('*')
       ->from('forum_topic_forum_category', 'ftc')
       ->from('forum_topic', 'ft')
       ->where('ftc.forum_topic_id = ft.id');*/
            
   // }
   
    // SELECT * FROM forum_topic INNER JOIN forum_topic_forum_category ON forum_topic.id = forum_topic_forum_category.forum_topic_id WHERE forum_topic_id = 1; 


    /*
    public function findByCategory($value)
    {
        return $this->createQueryBuilder('cat')
            ->andWhere('cat.id = :val')
            ->setParameter('val', $value)
            ->orderBy('cat.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            
        ;
    }
    */
    

}
