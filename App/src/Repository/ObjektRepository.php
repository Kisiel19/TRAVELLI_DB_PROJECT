<?php

namespace App\Repository;

use App\Entity\Objekt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Objekt>
 *
 * @method Objekt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Objekt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Objekt[]    findAll()
 * @method Objekt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjektRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Objekt::class);
    }

//    /**
//     * @return Objekt[] Returns an array of Objekt objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Objekt
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
