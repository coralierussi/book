<?php

namespace App\Repository;

use App\Entity\Name;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Name>
 */
class NameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Name::class);
    }

     // add => vocabulaire lié au pattern repository, mieux que "save"
     public function add(Name $name): void
     {
         $this->getEntityManager()->persist($name);
         $this->getEntityManager()->flush();
     }
 
     public function remove(Name $name): void
     {
         $this->getEntityManager()->remove($name);
         $this->getEntityManager()->flush();
     }
 }


    //    /**
    //     * @return Name[] Returns an array of Name objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('n.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Name
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
