<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class Expression_besoinRepository extends EntityRepository
{

	 /* advanced search */
    public function search($searchParam) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('e')
               ->leftJoin('e.employe','emp')
               ->addSelect('emp');

        if(!empty($keyword))
            $qb->andWhere('e.dateEmission like :keyword or emp.nom like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        if(!empty($ids))
            $qb->andWhere('e.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($dateEmission))
            $qb->andWhere('e.dateEmission like :dateEmission')->setParameter('dateEmission', $dateEmission);
        if(!empty($employe))
            $qb->andWhere('emp.nom like :employe')->setParameter('employe', $employe);
        if(!empty($accord)){
            if($accord == "true")
                $accord=true;
            else
                $accord=false;
            $qb->andWhere('e.accord like :accord')->setParameter('accord', $accord);
        }
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('dateEmission', 'employe_id')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('e.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function searchMesBesoins($searchParam,$user) {
        extract($searchParam);        
        $qb = $this->createQueryBuilder('e')
               ->leftJoin('e.employe','emp')
               ->addSelect('emp')
               ->where('emp.nom = :user and e.accord like :accord')
                   ->setParameter('user', $user->getEmploye()->getNom())
                   ->setParameter('accord', false);


        if(!empty($keyword))
            //emp.nom = :user and e.accord = false and 
            $qb->andWhere('e.dateEmission like :keyword or emp.nom like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
                //->setParameter('user', $user->getEmploye()->getNom());
        if(!empty($ids))
            $qb->andWhere('e.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($dateEmission))
            $qb->andWhere('e.dateEmission like :dateEmission')->setParameter('dateEmission', $dateEmission);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('dateEmission', 'employe_id')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('e.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult(($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $qb = $this->createQueryBuilder('e')
                   ->select('COUNT(e)');
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function counterMesBesoins($user) {
        $qb = $this->createQueryBuilder('e')
                   ->leftJoin('e.employe','emp')
                   ->addSelect('emp')
                   ->select('COUNT(e)')
                   ->where('emp.nom = :user and e.accord like :accord')
                   ->setParameter('user', $user->getEmploye()->getNom())
                   ->setParameter('accord', false);
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getEmployess()
    {
        return  $this->fetch("select distinct nom as nom from employe");
    }
    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }

}
