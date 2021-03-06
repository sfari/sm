<?php

namespace ISETSO\UserBundle\Repository\User;
use Doctrine\ORM\Query;
/**
 * UserHistoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserHistoryRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
	public function getUserNotification(\ISETSO\UserBundle\Entity\User\User $user = null)
	{
        $qb = $this->_em->createQueryBuilder();
        $or = $qb->expr()->orx();

        if ($user->hasRole('ROLE_ADMIN')){
            $or->add($qb->expr()->neq('a.id', $user->getId()));
        }else{
            $or->add($qb->expr()->in('n.role', $user->getRoles()));
            $or->add($qb->expr()->neq('a.id', $user->getId()));
        }

        return $this->createQueryBuilder('n')
                        ->select('n')
                        ->join('n.author' , 'a')
                        ->where($or)
                        ;
	}

    /**
     * @return array
     */
    public function getAllNotification(\ISETSO\UserBundle\Entity\User\User $user)
    {
        return $this->createQueryBuilder('n')
                        ->select('n.message , n.action , a.username , n.date')
                        ->join('n.author' , 'a')
                        ->where('a.id = :id')
                        ->setParameter('id',$user->getId())
                        ;
    }

}
