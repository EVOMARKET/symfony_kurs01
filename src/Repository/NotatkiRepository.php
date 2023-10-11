<?php

namespace App\Repository;

use App\Entity\Notatki;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Notatki>
 *
 * @method Notatki|null find($id, $lockMode = null, $lockVersion = null)
 * @method Notatki|null findOneBy(array $criteria, array $orderBy = null)
 * @method Notatki[]    findAll()
 * @method Notatki[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotatkiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notatki::class);
    }

//    /**
//     * @return Notatki[] Returns an array of Notatki objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Notatki
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
