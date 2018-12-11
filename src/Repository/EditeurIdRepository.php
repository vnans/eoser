<?php

namespace App\Repository;

use App\Entity\EditeurId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EditeurId|null find($id, $lockMode = null, $lockVersion = null)
 * @method EditeurId|null findOneBy(array $criteria, array $orderBy = null)
 * @method EditeurId[]    findAll()
 * @method EditeurId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EditeurIdRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EditeurId::class);
    }

//    /**
//     * @return EditeurId[] Returns an array of EditeurId objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EditeurId
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
