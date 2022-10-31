<?php

namespace App\Repository;

use App\Entity\APIINSTALLPERM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<APIINSTALLPERM>
 *
 * @method APIINSTALLPERM|null find($id, $lockMode = null, $lockVersion = null)
 * @method APIINSTALLPERM|null findOneBy(array $criteria, array $orderBy = null)
 * @method APIINSTALLPERM[]    findAll()
 * @method APIINSTALLPERM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class APIINSTALLPERMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, APIINSTALLPERM::class);
    }

    public function add(APIINSTALLPERM $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(APIINSTALLPERM $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return APIINSTALLPERM[] Returns an array of APIINSTALLPERM objects
     */

   public function findByExampleField($value): array
      {
        return $this->createQueryBuilder('apiinstallperm')
            ->andWhere('apiinstallperm.branch_id = :val')
            ->setParameter('val', $value)
            ->orderBy('apiinstallperm.branch_id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findOneBySomeField($value): ?APIINSTALLPERM
    {
        return $this->createQueryBuilder('apiinstallperm')
            ->andWhere('apiinstallperm.branch_id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
