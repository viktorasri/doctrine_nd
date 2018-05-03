<?php

namespace App\Repository;

use App\Entity\Products1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Products1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Products1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Products1[]    findAll()
 * @method Products1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Products1Repository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Products1::class);
    }

//    /**
//     * @return Products1[] Returns an array of Products1 objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Products1
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
