<?php

namespace App\Repository;

use App\Entity\Infosms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Infosms|null find($id, $lockMode = null, $lockVersion = null)
 * @method Infosms|null findOneBy(array $criteria, array $orderBy = null)
 * @method Infosms[]    findAll()
 * @method Infosms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfosmsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Infosms::class);
    }

//    /**
//     * @return Infosms[] Returns an array of Infosms objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Infosms
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
