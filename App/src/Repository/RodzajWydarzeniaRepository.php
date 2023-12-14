<?php

namespace App\Repository;

use App\Entity\RodzajWydarzenia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RodzajWydarzenia>
 *
 * @method RodzajWydarzenia|null find($id, $lockMode = null, $lockVersion = null)
 * @method RodzajWydarzenia|null findOneBy(array $criteria, array $orderBy = null)
 * @method RodzajWydarzenia[]    findAll()
 * @method RodzajWydarzenia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RodzajWydarzeniaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RodzajWydarzenia::class);
    }

//    /**
//     * @return RodzajWydarzenia[] Returns an array of RodzajWydarzenia objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RodzajWydarzenia
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
