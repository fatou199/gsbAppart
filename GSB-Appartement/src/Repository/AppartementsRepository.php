<?php

namespace App\Repository;

use App\Entity\Appartements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Appartements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Appartements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Appartements[]    findAll()
 * @method Appartements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppartementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Appartements::class);
    }

    public function recherche_appart(Appartements $recherche): array
    {
        return $this->createQueryBuilder('a')
        ->setParameter('typeappart', $recherche->getTypeappart())
        ->andwhere('a.typeappart = :typeappart')
        
        ->setParameter('prixlocmin', $recherche->getprixlocmin())
        ->andwhere('a.prixloc >= :prixlocmin')
        
        ->setParameter('prixlocmax', $recherche->getprixlocmax())
        ->andwhere('a.prixloc <= :prixlocmax')
        ->getQuery()
        ->getResult();
        
        
    }
    
    
    
    // /**
    //  * @return Appartements[] Returns an array of Appartements objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Appartements
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
