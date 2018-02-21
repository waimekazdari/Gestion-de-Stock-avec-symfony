<?php
// src/AppBundle/Entity/UserRepository.php
namespace AppBundle\Entity;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
class UserRepository extends EntityRepository implements UserLoaderInterface
{
public function loadUserByUsername($username)
{
return $this->createQueryBuilder('u')
->where('u.username = :username OR u.email = :email')
->setParameter('username', $username)
->setParameter('email', $username)
->getQuery()
->getOneOrNullResult();
}

public function getActive()
    {
        // Comme vous le voyez, le délais est redondant ici, l'idéale serait de le rendre configurable via votre bundle
        $delay = new \DateTime();
        $delay->setTimestamp(strtotime('2 minutes ago'));
 
        $qb = $this->createQueryBuilder('u')
            ->where('u.lastActivity > :delay')
            ->setParameter('delay', $delay)
        ;
 
        return $qb->getQuery()->getResult();
    }
    
    public function getUsers()
    {
        $qb = $this->createQueryBuilder('u')
                ->leftJoin('u.image', 'img')
                ->leftJoin('u.employe','emp')
                ->addSelect('img')
                ->addSelect('emp')
        ;
 
        return $qb->getQuery()->getResult();
    }

    public function search($searchParam) {
        extract($searchParam);      
       $qb = $this->createQueryBuilder('u')
               ->leftJoin('u.image', 'img')
               ->leftJoin('u.employe','emp')
               ->addSelect('img')
               ->addSelect('emp');

        if(!empty($keyword)){
            $qb->andWhere('emp.nom like :keyword or u.email like :keyword or emp.adresse like :keyword or emp.tel like :keyword')
                ->setParameter('keyword', '%'.$keyword.'%');
        }

        if(!empty($ids))
            $qb->andWhere('u.id in (:ids)')->setParameter('ids', $ids);
        if(!empty($sortBy)){
            $sortBy = in_array($sortBy, array('nom', 'username')) ? $sortBy : 'id';
            $sortDir = ($sortDir == 'DESC') ? 'DESC' : 'ASC';
            $qb->orderBy('e.' . $sortBy, $sortDir);
        }
        if(!empty($perPage)) $qb->setFirstResult( ($page - 1) * $perPage)->setMaxResults($perPage);

       return new Paginator($qb->getQuery());
    }

    public function counter() {
        $sql = 'SELECT count(u) FROM AppBundle\Entity\User u';
        $query = $this->_em->createQuery($sql);
         
      return $query->getOneOrNullResult();
    }
}