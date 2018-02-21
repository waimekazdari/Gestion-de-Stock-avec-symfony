<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class LigneRepository extends EntityRepository
{

public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('l')
               ->leftJoin('l.livraison','liv')
               ->addSelect('liv')
               ->leftJoin('liv.fournisseur','f')
               ->addSelect('f')
               ->leftJoin('l.article','ar')
               ->addSelect('ar')
               ->leftJoin('ar.category','cat')
               ->addSelect('cat');

        if(!empty($keyword))
            $qb->andWhere('l.quantite like :keyword or l.prix like :keyword or l.duree like :keyword or l.dateGarantie like :keyword  or liv.refMarche like :keyword or ar.ref like :keyword or ar.libele like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('l.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($quantite))
            $qb->andWhere('l.quantite like :quantite')->setParameter('quantite', $quantite);
        if(!empty($prix))
            $qb->andWhere('l.prix like :prix')->setParameter('prix', $prix);
        if(!empty($livraison))
            $qb->andWhere('liv.refMarche = :refMarche')->setParameter('refMarche', $livraison);
       if(!empty($article))
            $qb->andWhere('ar.ref = :ref')->setParameter('ref', $article);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('refMarche','livraison_id','article_id')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('liv.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('l')->select('COUNT(l)');
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getLivraisons()
    {
        return  $this->fetch("select distinct ref_marche as refMarche from livraison");
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
        $qb = $this->createQueryBuilder('l')
		        	->leftJoin('l.livraison','liv')
		            ->addSelect('liv');

        $qb->select('l')
	       ->where('liv.id = ?1')
	       ->setParameter(1,$id);

       return $qb->getQuery()->getResult();
    }

}