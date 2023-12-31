<?php

namespace App\Repository;

use App\Entity\Trails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Trails>
 *
 * @method Trails|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trails|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trails[]    findAll()
 * @method Trails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trails::class);
    }

//    /**
//     * @return Trails[] Returns an array of Trails objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Trails
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
