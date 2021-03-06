<?php

namespace FUT\ARManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cards
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FUT\ARManagerBundle\Entity\CardsRepository")
 */
class Cards
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
    * @ORM\ManyToOne(targetEntity="FUT\ARManagerBundle\Entity\Players")
    * @ORM\JoinColumn(nullable=false)
    */
    private $player;

    /**
     * @var integer
     *
     * @ORM\Column(name="BuyPrice", type="integer")
     */
    private $buyPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="SellPrice", type="integer")
     */
    private $sellPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BuyDate", type="datetime")
     */
    private $buyDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SellDate", type="datetime",nullable=true)
     */
    private $sellDate;

    /**
     * @var string
     *
     *@ORM\Column(name="Status", type="string", length=255)
     */
    private $status;

    /**
     * @var integer
     *
     *@ORM\Column(name="Benefices", type="integer")
     */
    private $benefices;


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
     * Set buyPrice
     *
     * @param integer $buyPrice
     * @return Cards
     */
    public function setBuyPrice($buyPrice)
    {
        $this->buyPrice = $buyPrice;

        return $this;
    }

    /**
     * Get buyPrice
     *
     * @return integer 
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * Set sellPrice
     *
     * @param integer $sellPrice
     * @return Cards
     */
    public function setSellPrice($sellPrice)
    {
        $this->sellPrice = $sellPrice;

        return $this;
    }

    /**
     * Get sellPrice
     *
     * @return integer 
     */
    public function getSellPrice()
    {
        return $this->sellPrice;
    }

    /**
     * Set buyDate
     *
     * @param \DateTime $buyDate
     * @return Cards
     */
    public function setBuyDate($buyDate)
    {
        $this->buyDate = $buyDate;

        return $this;
    }

    /**
     * Get buyDate
     *
     * @return \DateTime 
     */
    public function getBuyDate()
    {
        return $this->buyDate;
    }

    /**
     * Set sellDate
     *
     * @param \DateTime $sellDate
     * @return Cards
     */
    public function setSellDate($sellDate)
    {
        $this->sellDate = $sellDate;

        return $this;
    }

    /**
     * Get sellDate
     *
     * @return \DateTime 
     */
    public function getSellDate()
    {
        return $this->sellDate;
    }

    /**
     * Set player
     *
     * @param \FUT\ARManagerBundle\Entity\Players $player
     * @return Cards
     */
    public function setPlayer(\FUT\ARManagerBundle\Entity\Players $player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \FUT\ARManagerBundle\Entity\Players 
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Cards
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set benefices
     *
     * @param integer $benefices
     * @return Cards
     */
    public function setBenefices($benefices)
    {
        $this->benefices = $benefices;

        return $this;
    }

    /**
     * Get benefices
     *
     * @return integer 
     */
    public function getBenefices()
    {
        return $this->benefices;
    }
}
