<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class SortieRepository extends EntityRepository
{

	 /* advanced search */
    public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('s')
               ->leftJoin('s.employe','e')
               ->addSelect('e');

        if(!empty($keyword))
            $qb->andWhere('s.date like :keyword or s.IdSortie like :keyword or e.nom like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('s.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($date))
            $qb->andWhere('s.date like :date')->setParameter('date', $date);
        if(!empty($IdSortie))
            $qb->andWhere('s.IdSortie like :IdSortie')->setParameter('IdSortie', $IdSortie);
        if(!empty($employe))
            $qb->andWhere('e.nom = :nom')->setParameter('nom', $employe);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('date')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('s.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('s')->select('COUNT(s)');
        return $qb->getQuery()->getSingleScalarResult();
    }
    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }
    public function getEmployes()
    {
        return  $this->fetch("select distinct nom as nom from employe");
    }

}
