<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ArticleRepository extends EntityRepository
{
    /* advanced search */
    public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('a')
               ->leftJoin('a.category','cat')
               ->addSelect('cat');

        if(!empty($keyword))
            $qb->andWhere('a.libele like :keyword or a.ref like :keyword or a.code like :keyword or cat.libele like :keyword or cat.code like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('a.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($ref))
            $qb->andWhere('a.ref like :ref')->setParameter('ref', $ref);
        if(!empty($code))
            $qb->andWhere('a.code like :code')->setParameter('code', $code);
        if(!empty($category))
            $qb->andWhere('cat.libele = :libele')->setParameter('libele', $category);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('libele', 'category_id')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('a.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('a')->select('COUNT(a)');
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getCategories()
    {
        return  $this->fetch("select distinct libele as label from category");
    }
    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }

    public function searchh($ref) {   
        $qb = $this->createQueryBuilder('a');
        $qb->select('a')
       ->where('a.ref = ?1')
       ->setParameter(1,$ref);

       return $qb->getQuery()->getSingleResult();
    }
}