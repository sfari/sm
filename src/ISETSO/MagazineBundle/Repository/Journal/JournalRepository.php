<?php

namespace ISETSO\MagazineBundle\Repository\Journal;

/**
 * JournalRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JournalRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * @return array
     */
    public function getAllStock()
    {
        return $this->createQueryBuilder('j')
                        ->where('j.type = :id')
                        ->setParameter('id', "Stock")
                        ->select('s.price ,sum(s.quantity) as quantity , s.inventoryNumber as inventoryNumber, s.id as sd_id, a.id as article_id, a.designation as article , sf.designation as subFamily , sfa.designation as family , u.designation as unit')
                        ->join('j.supportingDocument' , 's')
                        ->join('s.article' , 'a')
                        ->join('a.subFamily','sf')
                        ->join('sf.family','sfa')
                        ->join('a.unit','u')
                        ->groupBy('s.id')
                        ->getQuery()
                        ->getResult()
                        ;
    }

    /**
     * @return array
     */
    public function getStockBySupportingDocument($id)
    {
        return $this->createQueryBuilder('j')
                        ->where('j.type = :type')
                        ->setParameter('type', "Stock")
                        ->andWhere('s.id = :id')
                        ->setParameter('id', $id)
                        ->select('sum(s.quantity) as quantity')
                        ->join('j.supportingDocument' , 's')
                        ->groupBy('s.id')
                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

    /**
     * @return array
     */
    public function getAllStockByArticle()
    {
        return $this->createQueryBuilder('j')
                        ->where('j.type = :id')
                        ->setParameter('id', "Stock")
                        ->select('s.price ,sum(s.quantity) as quantity , a.id as article_id, a.designation as article , sf.designation as subFamily , sfa.designation as family , u.designation as unit')
                        ->join('j.supportingDocument' , 's')
                        ->join('s.article' , 'a')
                        ->join('a.subFamily','sf')
                        ->join('sf.family','sfa')
                        ->join('a.unit','u')
                        ->groupBy('a.id')
                        ->getQuery()
                        ->getResult()
                        ;
    }

    /**
     * @return array
     */
    public function getStock()
    {
        return  $this->_em->createQuery(
        "SELECT sd.price AS price,
                sum(sd.quantity) AS qte,
                article.id AS id_article,
                article.designation AS article_name,
                sfa.designation AS subFamily,
                fa.designation AS family, 
                un.designation AS unit ,
            (SELECT sum(d_detail.quantity) 
            FROM 
                ISETSOMagazineBundle:ArticleManagement\DischargeArticle d
                JOIN d.detail d_detail
                JOIN d_detail.supportingDocument d_sd
                JOIN d_sd.article d_article
            WHERE 
              d.etat = 'a' AND d_article.id = id_article 
            GROUP BY d_article.id) as discharge ,
            (SELECT sum(r_detail.quantity) 
            FROM 
                ISETSOMagazineBundle:ArticleManagement\ReturnArticleToCentralStore r
                JOIN r.detail r_detail
                JOIN r_detail.supportingDocument r_sd
                JOIN r_sd.article r_article
            WHERE 
              r.etat = 'a' AND r_article.id = id_article 
            GROUP BY r_article.id) as returned 
        FROM 
            ISETSOMagazineBundle:Journal\Journal j 
            JOIN j.supportingDocument sd
            JOIN sd.article article
            JOIN article.subFamily sfa
            JOIN sfa.family fa
            JOIN article.unit un
        WHERE 
            j.type = 'Stock'
        GROUP BY article.id" );
        
        /*
        "SELECT sd.price AS price, sum(sd.quantity) AS qte,  article.id AS id_article, article.designation AS article,sfa.designation AS subfamily,  fa.designation AS family, 
          un.designation AS unit ,
          (SELECT 
              sum(d_detail.quantity) 
            FROM 
              discharge_article d
              INNER JOIN discharge_article_detail_discharge_article d6_ ON d.id = d6_.discharge_article_id 
              INNER JOIN detail_discharge_article d_detail ON d_detail.id = d6_.detail_discharge_article_id 
              INNER JOIN supporting_document sd ON d_detail.article_id = sd.id 
              INNER JOIN article d_article ON sd.article_id = d_article.id
            WHERE 
              d.etat = 'a' AND d_article.id = id_article 
            GROUP BY 
              d_article.id) as discharge ,
              (SELECT 
              sum(r_detail.quantity) 
            FROM 
              return_article r
              LEFT JOIN return_article_to_central_store d2_ ON r.id = d2_.id 
              INNER JOIN return_article_detail_return_article r14_ ON r.id = r14_.return_article_id 
              INNER JOIN detail_return_article r_detail ON r_detail.id = r14_.detail_return_article_id 
              INNER JOIN supporting_document sd ON r_detail.article_id = sd.id 
              INNER JOIN article d_article ON sd.article_id = d_article.id
            WHERE 
              r.etat = 'a' AND d_article.id = id_article 
            GROUP BY 
              d_article.id) as returned 
        FROM 
          journal j 
          INNER JOIN journal_supporting_document j8_ ON j.id = j8_.journal_id 
          INNER JOIN supporting_document sd ON sd.id = j8_.supporting_document_id 
          INNER JOIN article article ON sd.article_id = article.id 
          INNER JOIN subfamily sfa ON article.subfamily_id = sfa.id 
          INNER JOIN family fa ON sfa.local_id = fa.id 
          INNER JOIN unit un ON article.unit_id = un.id 
        WHERE 
          j.type = 'Stock'
        GROUP BY 
          article.id"
        */
    }

    /**
     * @param int $id
     * @return array
     */
    public function getAllStockByIdArticle($id)
    {
        return $this->createQueryBuilder('j')
                        ->where('j.type = :type')
                        ->setParameter('type', "Stock")
                        ->select('s.price ,sum(s.quantity) as quantity , s.inventoryNumber as inventoryNumber, s.id as sd_id, a.id as article_id, a.designation as article , sf.designation as subFamily , sfa.designation as family , u.designation as unit')
                        ->join('j.supportingDocument' , 's')
                        ->join('s.article' , 'a')
                        ->join('a.subFamily','sf')
                        ->join('sf.family','sfa')
                        ->join('a.unit','u')
                        ->andWhere('a.id = :id')
                        ->setParameter('id', $id)
                        ->groupBy('s.id')
                        ->getQuery()
                        ->getResult()
                        ;
    }

    /**
     * @param String $field
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByAnything($query , $field)
    {
        return  $query->andWhere('f.inventoryNumber like :search 
                                    OR a.designation LIKE :search 
                                    OR f.price LIKE :search 
                                    OR f.quantity LIKE :search
                                    OR sf.designation LIKE :search 
                                    OR sfa.designation LIKE :search
                                    OR u.designation LIKE :search')
                    ->setParameter('search', '%'.$field.'%')
                    ->orderBy('j.id', 'DESC');
    }

    /**
     * @param date $startDate
     * @param date $endDate
     * @param Query $query
     * @return Query
     */
    public function findBetween($query , $startDate , $endDate)
    {
        return  $query->andWhere('j.dateEntre BETWEEN :startDate AND :endDate')
                        ->setParameter('startDate', $startDate)
                        ->setParameter('endDate', $endDate)
                        ->orderBy('j.id', 'DESC');
    }

    /**
     * @return array
     */
    public function getByDate()
    {
        return  $this->createQueryBuilder('n')
                        ->select('MONTH(n.dateEntre) as month , n.type , sum(s.price) as price ,sum(s.quantity) as quantity')
                        ->join('n.supportingDocument' , 's')
                        ->groupBy('month')
                        ->getQuery()
                        ->getResult();
    }

    /**
     * @return array
     */
    public function getByQuantity()
    {
        return  $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity , n.type')
                        ->join('n.supportingDocument' , 's')
                        ->groupBy('n.type')
                        ->getQuery()
                        ->getResult();
    }
}
