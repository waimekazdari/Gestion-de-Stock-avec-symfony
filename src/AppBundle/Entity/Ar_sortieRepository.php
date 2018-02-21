<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class Ar_sortieRepository extends EntityRepository
{

public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('s')
               ->leftJoin('s.sortie','sor')
               ->addSelect('sor')
               ->leftJoin('sor.employe','emp')
               ->addSelect('emp')
               ->leftJoin('s.article','ar')
               ->addSelect('ar')
               ->leftJoin('ar.category','cat')
               ->addSelect('cat');

        if(!empty($keyword))
            $qb->andWhere('s.quantite like :keyword or ar.ref like :keyword or ar.libele like :keyword or sor.IdSortie like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('s.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($quantite))
            $qb->andWhere('s.quantite like :quantite')->setParameter('quantite', $quantite);
        if(!empty($sortie))
            $qb->andWhere('sor.date = :date')->setParameter('date', $sortie);
         if(!empty($IdSortie))
            $qb->andWhere('sor.IdSortie = :IdSortie')->setParameter('IdSortie', $IdSortie);
       if(!empty($article))
            $qb->andWhere('ar.ref = :ref')->setParameter('ref', $article);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('date','article_id')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('sor.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('s')->select('COUNT(s)');
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getSorties()
    {
        return  $this->fetch("select distinct date as date from sortie");
    }

    public function getRefSorties()
    {
        return  $this->fetch("select distinct id_sortie as ref from sortie");
    }

    public function getArticles()
    {
        return  $this->fetch("select distinct ref as ref from article");
    }

    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }


    public function searchh($id) {   
        $qb = $this->createQueryBuilder('s')
		        	->leftJoin('s.sortie','sor')
		            ->addSelect('sor');

        $qb->select('s')
	       ->where('sor.id = ?1')
	       ->setParameter(1,$id);

       return $qb->getQuery()->getResult();
    }

}