<?php

namespace ISETSO\MagazineBundle\Repository\Provider;

/**
 * ProviderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProviderRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param ActivityDomain $activityDomain
     * @return Query
     */
    public function findAllBy($activityDomain)
    {
        return $this->createQueryBuilder('f')
                    ->join('f.user', 'u')
                    ->join('f.activityDomain', 'm')
                    ->where('m.id = :id')
                    ->setParameter('id',$activityDomain->getId());
    }

    /**
     * @param ActivityDomain $activityDomain
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByUserAndBy($activityDomain,$user)
    {
        return $this->createQueryBuilder('f')
                        ->join('f.user', 'u')
                        ->join('f.activityDomains', 'm')
                        ->where('u.id = :id')
                        ->setParameter('id',$user->getId())
                        ->andWhere('m.id = :id')
                        ->setParameter('id',$activityDomain->getId());
    }

	/**
     * @return Query
     */
    public function findAll()
    {
        return $this->createQueryBuilder('f')
                    ->join('f.user', 'u');
    }

    /**
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByUser($user)
    {
        return $this->createQueryBuilder('f')
                        ->join('f.user', 'u')
                        ->where('u.id = :id')
                        ->setParameter('id',$user->getId());
    }

    /**
     * @param String $field
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByAnything($query , $field)
    {
        return  $query->andWhere('f.id like :search 
                                OR f.socialReason LIKE :search 
                                OR f.phone LIKE :search 
                                OR f.fax LIKE :search 
                                OR f.email LIKE :search
                                OR f.contact LIKE :search
                                OR u.username LIKE :search
                                OR f.address LIKE :search')
                    ->setParameter('search', '%'. $field.'%')
                    ->orderBy('f.id', 'ASC');
    }

    public function getByActivityDomain($activityDomain)
    {
    	return $this->createQueryBuilder('f')
                    ->join('f.user', 'u')
                    ->join('f.activityDomain', 's')
                    ->where('s.id = :id')
                    ->setParameter('id',$activityDomain->getId());
    }
}
