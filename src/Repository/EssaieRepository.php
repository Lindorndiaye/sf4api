<?php

namespace App\Repository;

use App\Entity\Essaie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Essaie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Essaie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Essaie[]    findAll()
 * @method Essaie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EssaieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Essaie::class);
    }

//    /**
//     * @return Essaie[] Returns an array of Essaie objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Essaie
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
