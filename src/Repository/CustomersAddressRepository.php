<?php

namespace App\Repository;

use App\Entity\CustomersAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CustomersAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomersAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomersAddress[]    findAll()
 * @method CustomersAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomersAddressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomersAddress::class);
    }

    // /**
    //  * @return CustomersAddress[] Returns an array of CustomersAddress objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomersAddress
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
