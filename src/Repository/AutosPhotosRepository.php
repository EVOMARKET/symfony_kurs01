<?php

namespace App\Repository;

use App\Entity\AutosPhotos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AutosPhotos>
 *
 * @method AutosPhotos|null find($id, $lockMode = null, $lockVersion = null)
 * @method AutosPhotos|null findOneBy(array $criteria, array $orderBy = null)
 * @method AutosPhotos[]    findAll()
 * @method AutosPhotos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutosPhotosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AutosPhotos::class);
    }

//    /**
//     * @return AutosPhotos[] Returns an array of AutosPhotos objects
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

//    public function findOneBySomeField($value): ?AutosPhotos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
