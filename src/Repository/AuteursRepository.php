<?php

namespace App\Repository;

use App\Entity\Auteurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Auteurs>
 */
class AuteursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Auteurs::class);
    }


     // add => vocabulaire lié au pattern repository, mieux que "save"
     public function add(Auteurs $auteurs): void
     {
         $this->getEntityManager()->persist($auteurs);
         $this->getEntityManager()->flush();
     }
 
     public function remove(Auteurs $auteurs): void
     {
         $this->getEntityManager()->remove($auteurs);
         $this->getEntityManager()->flush();
     }
 }


    //    /**
    //     * @return Auteurs[] Returns an array of Auteurs objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Auteurs
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
