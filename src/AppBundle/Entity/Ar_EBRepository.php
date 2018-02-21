<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class Ar_EBRepository extends EntityRepository
{

public function searchh($id) {   
        $qb = $this->createQueryBuilder('e')
		        	->leftJoin('e.expression_besoin','ex')
		            ->addSelect('ex');

        $qb->select('e')
	       ->where('ex.id = ?1')
	       ->setParameter(1,$id);

       return $qb->getQuery()->getResult();
    }

}