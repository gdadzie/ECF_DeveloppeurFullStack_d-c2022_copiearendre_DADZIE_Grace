<?php

namespace App\Repository;

use App\Entity\APICLIENTS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<APICLIENTS>
 *
 * @method APICLIENTS|null find($id, $lockMode = null, $lockVersion = null)
 * @method APICLIENTS|null findOneBy(array $criteria, array $orderBy = null)
 * @method APICLIENTS[]    findAll()
 * @method APICLIENTS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class APICLIENTSRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, APICLIENTS::class);
    }

    public function add(APICLIENTS $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(APICLIENTS $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return APICLIENTS[] Returns an array of APICLIENTS objects
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

//    public function findOneBySomeField($value): ?APICLIENTS
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
