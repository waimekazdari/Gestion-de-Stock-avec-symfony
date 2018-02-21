<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CategoryRepository extends EntityRepository
{
    /* advanced search */
    public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('c');
             /*  ->leftJoin('c.category','cat')
               ->addSelect('cat');*/

        if(!empty($keyword))
            $qb->andWhere('c.libele like :keyword or c.code like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('c.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($code))
            $qb->andWhere('c.code like :code')->setParameter('code', $code);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('libele', 'code')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('c.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('c')->select('COUNT(c)');
        return $qb->getQuery()->getSingleScalarResult();
    }

    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }
}