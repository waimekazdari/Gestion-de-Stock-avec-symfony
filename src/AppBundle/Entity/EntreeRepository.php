<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class EntreeRepository extends EntityRepository
{

	 /* advanced search */
    public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('e');

        if(!empty($keyword))
            $qb->andWhere('e.date like :keyword or e.ref like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('e.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($date))
            $qb->andWhere('e.date like :date')->setParameter('date', $date);
        if(!empty($ref))
            $qb->andWhere('e.ref like :ref')->setParameter('ref', $ref);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('date')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('e.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('e')->select('COUNT(e)');
        return $qb->getQuery()->getSingleScalarResult();
    }
    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }

}
