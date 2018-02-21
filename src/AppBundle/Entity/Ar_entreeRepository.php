<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class Ar_entreeRepository extends EntityRepository
{

public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('e')
               ->leftJoin('e.entree','ent')
               ->addSelect('ent')
               ->leftJoin('e.article','ar')
               ->addSelect('ar')
               ->leftJoin('ar.category','cat')
               ->addSelect('cat');

        if(!empty($keyword))
            $qb->andWhere('e.quantite like :keyword or ar.ref like :keyword or ar.libele like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('e.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($quantite))
            $qb->andWhere('e.quantite like :quantite')->setParameter('quantite', $quantite);
        if(!empty($entree))
            $qb->andWhere('ent.date = :date')->setParameter('date', $entree);
         if(!empty($refEntr))
            $qb->andWhere('ent.ref = :ref')->setParameter('ref', $refEntr);
       if(!empty($article))
            $qb->andWhere('ar.ref = :ref')->setParameter('ref', $article);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('date','entre_id','article_id')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('ent.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('e')->select('COUNT(e)');
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getEntrees()
    {
        return  $this->fetch("select distinct date as date from entree");
    }

    public function getRefEntrees()
    {
        return  $this->fetch("select distinct ref as ref from entree");
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
        $qb = $this->createQueryBuilder('e')
		        	->leftJoin('e.entree','ent')
		            ->addSelect('ent');

        $qb->select('e')
	       ->where('ent.id = ?1')
	       ->setParameter(1,$id);

       return $qb->getQuery()->getResult();
    }

}