<?php

namespace ISETSO\MagazineBundle\Repository\Journal;

/**
 * JournalConsumableRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JournalConsumableRepository extends \Doctrine\ORM\EntityRepository
{
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
        return  $query->andWhere('f.id like :search OR f.dateEntre LIKE :search OR f.type LIKE :search OR u.username LIKE :search')
                    ->setParameter('search', '%'.$field.'%')
                    ->orderBy('f.id', 'DESC');
    }

    /**
     * @param date $startDate
     * @param date $endDate
     * @param Query $query
     * @return Query
     */
    public function findBetween($query , $startDate , $endDate)
    {
        return  $query->andWhere('f.dateEntre BETWEEN :startDate AND :endDate')
                        ->setParameter('startDate', $startDate)
                        ->setParameter('endDate', $endDate)
                        ->orderBy('f.id', 'DESC');
    }
}
