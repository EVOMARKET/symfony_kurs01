<?php

namespace App\Repository;

use App\Entity\Auta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Auta>
 *
 * @method Auta|null find($id, $lockMode = null, $lockVersion = null)
 * @method Auta|null findOneBy(array $criteria, array $orderBy = null)
 * @method Auta[]    findAll()
 * @method Auta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Auta::class);
    }

//    /**
//     * @return Auta[] Returns an array of Auta objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Auta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
