<?php

namespace App\Repository;

use App\Entity\TABSymfony;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TABSymfony|null find($id, $lockMode = null, $lockVersion = null)
 * @method TABSymfony|null findOneBy(array $criteria, array $orderBy = null)
 * @method TABSymfony[]    findAll()
 * @method TABSymfony[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TABSymfonyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TABSymfony::class);
    }

    // /**
    //  * @return TABSymfony[] Returns an array of TABSymfony objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TABSymfony
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
