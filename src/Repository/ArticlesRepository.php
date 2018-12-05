<?php

namespace App\Repository;

use App\Entity\Articles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Articles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Articles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Articles[]    findAll()
 * @method Articles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticlesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Articles::class);
    }

    public function byCategorie($categorie)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.categorie = :categorie')
            ->andWhere('u.publie = 1')
            ->orderBy('u.id')
            ->setParameter('categorie', $categorie);
        return $qb->getQuery()->getResult();
    }

    public function recherche($chaine)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->select('u')
            ->where($qb->expr()->like('u.titre', ':chaine'))
            ->andWhere('u.publie = 1')
            ->orderBy('u.id')
            ->setParameter('chaine', '%'.$chaine.'%');
        return $qb->getQuery()->getResult();
    }

    public function getNb()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('COUNT(u)');
        return $qb->getQuery()->getSingleScalarResult();
    }
}
