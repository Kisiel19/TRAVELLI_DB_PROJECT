<?php

namespace App\Repository;

use App\Entity\ObszarGeograficzny;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ObszarGeograficzny>
 *
 * @method ObszarGeograficzny|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObszarGeograficzny|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObszarGeograficzny[]    findAll()
 * @method ObszarGeograficzny[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObszarGeograficznyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObszarGeograficzny::class);
    }

//    /**
//     * @return ObszarGeograficzny[] Returns an array of ObszarGeograficzny objects
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

//    public function findOneBySomeField($value): ?ObszarGeograficzny
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
