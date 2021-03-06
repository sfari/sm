<?php

namespace ISETSO\MagazineBundle\Entity\Journal;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * SupportingDocument
 *
 * @ORM\Table(name="supporting_document")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Journal\SupportingDocumentRepository")
 * @UniqueEntity("inventoryNumber")
 */
class SupportingDocument
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="inventoryNumber", type="string", length=255, unique=true)
     */
    private $inventoryNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="float")
     * @Assert\NotBlank()
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     * @Assert\NotBlank()
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\MagazineBundle\Entity\Article\Article" , inversedBy="supportingDocuments")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * @Assert\NotBlank()
     * 
     */
    private $article;

    /**
     * @ORM\OneToMany(targetEntity="ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle", mappedBy="supportingDocument" ,fetch="EXTRA_LAZY")
     */
    private $detailDischarge;

    /**
     * @ORM\OneToMany(targetEntity="ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle", mappedBy="supportingDocument" ,fetch="EXTRA_LAZY")
     */
    private $detailReturn;

    /**
     * @ORM\ManyToMany(targetEntity="Journal", mappedBy="supportingDocument" ,fetch="EXTRA_LAZY")
     */
    private $journal;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detailDischarge = new \Doctrine\Common\Collections\ArrayCollection();
        $this->detailOrder = new \Doctrine\Common\Collections\ArrayCollection();
        $this->detailReturn = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * set id
     *
     * @return integer
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set inventoryNumber
     *
     * @param integer $inventoryNumber
     *
     * @return SupportingDocument
     */
    public function setInventoryNumber($inventoryNumber)
    {
        $this->inventoryNumber = $inventoryNumber;

        return $this;
    }

    /**
     * Get inventoryNumber
     *
     * @return integer
     */
    public function getInventoryNumber()
    {
        return $this->inventoryNumber;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return SupportingDocument
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return SupportingDocument
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set article
     *
     * @param \ISETSO\MagazineBundle\Entity\Article\Article $article
     *
     * @return SupportingDocument
     */
    public function setArticle(\ISETSO\MagazineBundle\Entity\Article\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \ISETSO\MagazineBundle\Entity\Article\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Add detailDischarge
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle $detailDischarge
     *
     * @return SupportingDocument
     */
    public function addDetailDischarge(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle $detailDischarge)
    {
        $this->detailDischarge[] = $detailDischarge;

        return $this;
    }

    /**
     * Remove detailDischarge
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle $detailDischarge
     */
    public function removeDetailDischarge(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle $detailDischarge)
    {
        $this->detailDischarge->removeElement($detailDischarge);
    }

    /**
     * Get detailDischarge
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetailDischarge()
    {
        return $this->detailDischarge;
    }

    /**
     * Add detailOrder
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle $detailOrder
     *
     * @return SupportingDocument
     */
    public function addDetailOrder(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle $detailOrder)
    {
        $this->detailOrder[] = $detailOrder;

        return $this;
    }

    /**
     * Remove detailOrder
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle $detailOrder
     */
    public function removeDetailOrder(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle $detailOrder)
    {
        $this->detailOrder->removeElement($detailOrder);
    }

    /**
     * Get detailOrder
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetailOrder()
    {
        return $this->detailOrder;
    }

    /**
     * Add detailReturn
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle $detailReturn
     *
     * @return SupportingDocument
     */
    public function addDetailReturn(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle $detailReturn)
    {
        $this->detailReturn[] = $detailReturn;

        return $this;
    }

    /**
     * Remove detailReturn
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle $detailReturn
     */
    public function removeDetailReturn(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle $detailReturn)
    {
        $this->detailReturn->removeElement($detailReturn);
    }

    /**
     * Get detailReturn
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetailReturn()
    {
        return $this->detailReturn;
    }

    /**
     * Add journal
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\Journal $journal
     *
     * @return SupportingDocument
     */
    public function addJournal(\ISETSO\MagazineBundle\Entity\Journal\Journal $journal)
    {
        $this->journal[] = $journal;

        return $this;
    }

    /**
     * Remove journal
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\Journal $journal
     */
    public function removeJournal(\ISETSO\MagazineBundle\Entity\Journal\Journal $journal)
    {
        $this->journal->removeElement($journal);
    }

    /**
     * Get journal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJournal()
    {
        return $this->journal;
    }
}
