<?php

namespace FUT\ARManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Players
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FUT\ARManagerBundle\Entity\PlayersRepository")
 */
class Players
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
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=255,nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="text")
     *
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="General", type="integer")
     */
    private $general;

    /**
     * @var string
     *
     * @ORM\Column(name="Forme", type="string", length=255)
     */
    private $forme;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="FUT\ARManagerBundle\Entity\Clubs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $club;

    /**
     * @var string
     *
     * @ORM\Column(name="CardPhoto", type="text")
     */
    private $cardPhoto;

    /**
     * @var integer
     *
     * @ORM\Column(name="SoldAmount", type="integer",nullable=true)
     */
    private $soldAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="PriceAverage", type="integer", nullable=true)
     */
    private $priceAverage;

    /**
     * @var integer
     *
     * @ORM\Column(name="SoldPriceAverage", type="integer", nullable=true)
     */
    private $soldPriceAverage;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProfitAverage", type="integer", nullable=true)
     */
    private $profitAverage;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProfitTotal", type="integer", nullable=true)
     */
    private $profitTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="ForSale",type="integer", nullable=false)
     */
    private $forSale;



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
     * Set firstName
     *
     * @param string $firstName
     * @return Players
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Players
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Players
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set general
     *
     * @param integer $general
     * @return Players
     */
    public function setGeneral($general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Get general
     *
     * @return integer 
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Set forme
     *
     * @param string $forme
     * @return Players
     */
    public function setForme($forme)
    {
        $this->forme = $forme;

        return $this;
    }

    /**
     * Get forme
     *
     * @return string 
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * Set cardPhoto
     *
     * @param string $cardPhoto
     * @return Players
     */
    public function setCardPhoto($cardPhoto)
    {
        $this->cardPhoto = $cardPhoto;

        return $this;
    }

    /**
     * Get cardPhoto
     *
     * @return string 
     */
    public function getCardPhoto()
    {
        return $this->cardPhoto;
    }

    /**
     * Set club
     *
     * @param \FUT\ARManager\Entity\Clubs $club
     * @return Players
     */
    public function setClub(\FUT\ARManagerBundle\Entity\Clubs $club)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return \FUT\ARManager\Entity\Clubs 
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set soldAmount
     *
     * @param integer $soldAmount
     * @return Players
     */
    public function setSoldAmount($soldAmount)
    {
        $this->soldAmount = $soldAmount;

        return $this;
    }

    /**
     * Get soldAmount
     *
     * @return integer 
     */
    public function getSoldAmount()
    {
        return $this->soldAmount;
    }

    /**
     * Set priceAverage
     *
     * @param integer $priceAverage
     * @return Players
     */
    public function setPriceAverage($priceAverage)
    {
        $this->priceAverage = $priceAverage;

        return $this;
    }

    /**
     * Get priceAverage
     *
     * @return integer 
     */
    public function getPriceAverage()
    {
        return $this->priceAverage;
    }

    /**
     * Set soldPriceAverage
     *
     * @param integer $soldPriceAverage
     * @return Players
     */
    public function setSoldPriceAverage($soldPriceAverage)
    {
        $this->soldPriceAverage = $soldPriceAverage;

        return $this;
    }

    /**
     * Get soldPriceAverage
     *
     * @return integer 
     */
    public function getSoldPriceAverage()
    {
        return $this->soldPriceAverage;
    }

    /**
     * Set profitAverage
     *
     * @param integer $profitAverage
     * @return Players
     */
    public function setProfitAverage($profitAverage)
    {
        $this->profitAverage = $profitAverage;

        return $this;
    }

    /**
     * Get profitAverage
     *
     * @return integer 
     */
    public function getProfitAverage()
    {
        return $this->profitAverage;
    }

    // return the new price average
    public function calculAverage($new,$old)
    {
        $N = $this->getSoldAmount;
        return (($old*$N)+$new)/($N+1);
    }

    //return the new total profit
    public function calculTotal(){
        return $this->getsoldAmount()*$this->getProfitTotal();
    }

    /**
     * Set profitTotal
     *
     * @param integer $profitTotal
     * @return Players
     */
    public function setProfitTotal($profitTotal)
    {
        $this->profitTotal = $profitTotal;

        return $this;
    }

    /**
     * Get profitTotal
     *
     * @return integer 
     */
    public function getProfitTotal()
    {
        return $this->profitTotal;
    }



    /**
     * Set forSale
     *
     * @param integer $forSale
     * @return Players
     */
    public function setForSale($forSale)
    {
        $this->forSale = $forSale;

        return $this;
    }

    /**
     * Get forSale
     *
     * @return integer 
     */
    public function getForSale()
    {
        return $this->forSale;
    }
}
