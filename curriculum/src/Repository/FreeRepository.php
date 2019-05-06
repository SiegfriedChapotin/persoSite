<?php

namespace App\Repository;

use App\Entity\Free;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Free|null find($id, $lockMode = null, $lockVersion = null)
 * @method Free|null findOneBy(array $criteria, array $orderBy = null)
 * @method Free[]    findAll()
 * @method Free[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FreeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Free::class);
    }

    // /**
    //  * @return Free[] Returns an array of Free objects
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
    public function findOneBySomeField($value): ?Free
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
