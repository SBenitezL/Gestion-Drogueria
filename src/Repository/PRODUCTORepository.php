<?php

namespace App\Repository;

use App\Entity\PRODUCTO;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRODUCTO>
 *
 * @method PRODUCTO|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRODUCTO|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRODUCTO[]    findAll()
 * @method PRODUCTO[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRODUCTORepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRODUCTO::class);
    }

    public function save(PRODUCTO $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PRODUCTO $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
   
 
//    /**
//     * @return PRODUCTO[] Returns an array of PRODUCTO objects
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

//    public function findOneBySomeField($value): ?PRODUCTO
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
