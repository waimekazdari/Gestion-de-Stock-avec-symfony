<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class FournisseurRepository extends EntityRepository
{
    /* advanced search */
    public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('f');
               /*->leftJoin('f.category','cat')
               ->addSelect('cat');*/

        if(!empty($keyword))
            $qb->andWhere('f.nom like :keyword or f.CIN like :keyword or f.email like :keyword or f.tel like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('f.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($CIN))
            $qb->andWhere('f.CIN like :CIN')->setParameter('CIN', $CIN);
        if(!empty($email))
            $qb->andWhere('f.email like :email')->setParameter('email', $email);
        if(!empty($tel))
            $qb->andWhere('f.tel = :tel')->setParameter('tel', $tel);
        if(!empty($ville))
            $qb->andWhere('f.ville = :ville')->setParameter('ville', $ville);
        if(!empty($pays))
            $qb->andWhere('f.pays = :pays')->setParameter('pays', $pays);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('nom', 'cin')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('f.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('f')->select('COUNT(f)');
        return $qb->getQuery()->getSingleScalarResult();
    }
    
    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }
}