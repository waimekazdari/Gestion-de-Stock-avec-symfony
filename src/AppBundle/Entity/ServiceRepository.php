<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ServiceRepository extends EntityRepository
{
    /* advanced search */
    public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('s')
               ->leftJoin('s.departement','dep')
               ->addSelect('dep');

        if(!empty($keyword))
            $qb->andWhere('s.libele like :keyword or dep.libele like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('s.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($libele))
            $qb->andWhere('s.libele like :libele')->setParameter('libele', $libele);
        if(!empty($departement))
            $qb->andWhere('dep.libele = :libele')->setParameter('libele', $departement);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('libele', 'departement_id')) ? $sortBy : 'id';
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

    public function getDepartements()
    {
        return  $this->fetch("select distinct libele as label from departement");
    }
    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }
}