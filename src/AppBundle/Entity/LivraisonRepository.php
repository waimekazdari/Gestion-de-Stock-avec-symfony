<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class LivraisonRepository extends EntityRepository
{

	 /* advanced search */
    public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('l')
               ->leftJoin('l.fournisseur','f')
               ->addSelect('f');

        if(!empty($keyword))
            $qb->andWhere('l.refMarche like :keyword or l.date like :keyword or f.nom like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('l.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($refMarche))
            $qb->andWhere('l.refMarche like :refMarche')->setParameter('refMarche', $refMarche);
        if(!empty($date))
            $qb->andWhere('l.date like :date')->setParameter('date', $date);
        if(!empty($fournisseur))
            $qb->andWhere('f.nom = :nom')->setParameter('nom', $fournisseur);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('date', 'fournisseur_id')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('l.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('l')->select('COUNT(l)');
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getFournisseurs()
    {
        return  $this->fetch("select distinct nom as nom from fournisseur");
    }
    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }

}
