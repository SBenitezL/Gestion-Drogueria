<?php

namespace App\Repository;

use App\Entity\PROVEEDOR;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PROVEEDOR>
 *
 * @method PROVEEDOR|null find($id, $lockMode = null, $lockVersion = null)
 * @method PROVEEDOR|null findOneBy(array $criteria, array $orderBy = null)
 * @method PROVEEDOR[]    findAll()
 * @method PROVEEDOR[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PROVEEDORRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PROVEEDOR::class);
    }

    public function save(PROVEEDOR $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PROVEEDOR $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PROVEEDOR[] Returns an array of PROVEEDOR objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PROVEEDOR
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
