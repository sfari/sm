<?php

namespace ISETSO\MagazineBundle\Repository\ArticleManagement;

use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToUser;
/**
 * ReturnArticleToCentralStoreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReturnArticleToCentralStoreRepository extends \Doctrine\ORM\EntityRepository
{
    /**
    * @param int $id
    * @return array
    */
    public function getReturnById($id)
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity')
                        ->join('n.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->groupBy('a.id')
                        ->where('n.etat = :etat')
                        ->setParameter('etat', "a")
                        ->andWhere('a.id = :id')
                        ->setParameter('id', $id)
                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

    /**
    * @param int $id
    * @return array
    */
    public function getReturnByArticle($id)
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity')
                        ->join('n.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->innerJoin('a.article' , 'ar')
                        ->groupBy('a.article')
                        ->where('n.etat = :etat')
                        ->setParameter('etat', "a")
                        ->andWhere('ar.id = :id')
                        ->setParameter('id', $id)
                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }
    
	/**
    * @return array
    */
    public function getAllReturn()
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity , a.id as article_id , a.designation as article_name , u.designation as unit ')
                        ->join('n.detail' , 's')
                        ->join('s.article' , 'a')
                        ->join('a.unit' , 'u')
                        ->groupBy('s.article')
                        ->where('n.etat = :etat')
                        ->setParameter('etat', "magazine.etatOption.accept")
                        ->getQuery()
                        ->getResult()
                        ;
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
        return $this->createQueryBuilder('j')
                        ->join('j.user', 'us')
                        ->where('us.id = :id')
                        ->setParameter('id',$user->getId())
                        ;
    }

    /**
     * @param String $field
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByAnything($query , $field)
    {
        return  $query->andWhere('f.id like :search OR f.etat LIKE :search OR f.date LIKE :search OR f.observation LIKE :search OR u.username LIKE :search')
                    ->setParameter('search', '%'.$field.'%')
                    ->orderBy('f.id', 'ASC');
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

    /**
     * @return array
     */
    public function getStockFromReturn()
    {
        return $this->createQueryBuilder('r')
                        ->select('sum(d.quantity) as quantity , ar.id as article_id')
                        ->join('r.detail' , 'd')
                        ->join('d.article' , 'ar')
                        ->groupBy('d.article')
                        ->where('r.etat = :etat')
                        ->setParameter('etat', "magazine.etatOption.accept")
                        ->getQuery()
                        ->getResult()
                        ;
    }

    /**
     * @return int
     */
    public function getTotalReturnNumber()
    {
        return  $this->createQueryBuilder('f')
                        ->select('count(f) as TotalReturnNumber')
                        ->where('f.etat = :etat')
                        ->setParameter('etat', "magazine.etatOption.accept")
                        ->getQuery()
                        ->getResult()[0]['TotalReturnNumber']
                        ;
        
    }

    /**
     * @return int
     */
    public function getNewReturnNumber()
    {
        return  $this->createQueryBuilder('f')
                        ->select('count(f) as NewReturnNumber')
                        ->where('f.etat <> :etat')
                        ->setParameter('etat', "magazine.etatOption.accept")
                        ->getQuery()
                        ->getResult()[0]['NewReturnNumber'];
    }
}
