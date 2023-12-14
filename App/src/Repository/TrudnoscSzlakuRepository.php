<?php

namespace App\Repository;

use App\Entity\TrudnoscSzlaku;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrudnoscSzlaku>
 *
 * @method TrudnoscSzlaku|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrudnoscSzlaku|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrudnoscSzlaku[]    findAll()
 * @method TrudnoscSzlaku[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrudnoscSzlakuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrudnoscSzlaku::class);
    }

//    /**
//     * @return TrudnoscSzlaku[] Returns an array of TrudnoscSzlaku objects
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

//    public function findOneBySomeField($value): ?TrudnoscSzlaku
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
