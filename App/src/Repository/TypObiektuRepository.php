<?php

namespace App\Repository;

use App\Entity\TypObiektu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypObiektu>
 *
 * @method TypObiektu|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypObiektu|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypObiektu[]    findAll()
 * @method TypObiektu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypObiektuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypObiektu::class);
    }

//    /**
//     * @return TypObiektu[] Returns an array of TypObiektu objects
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

//    public function findOneBySomeField($value): ?TypObiektu
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
