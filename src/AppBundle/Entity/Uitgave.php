<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * uitgave
 *
 * @ORM\Table(name="uitgave")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\uitgaveRepository")
 */
class Uitgave implements GezinInterface
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
     * @var float
     *
     * @ORM\Column(name="bedrag", type="float")
     */
    private $bedrag;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoRekening", type="text")
     */
    private $fotoRekening;

    /**
     * @var string
     *
     * @ORM\Column(name="betaaldDoor", type="string", length=255)
     */
    private $betaaldDoor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="uitgegevenOp", type="datetime")
     */
    private $uitgegevenOp;

    /**
     * @var string
     *
     * @ORM\Column(name="locatie", type="string", length=255)
     */
    private $locatie;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Categorie", mappedBy="uitgaves")
     */
    private $categories;

    /**
     * @var Winkel
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Winkel", inversedBy="uitgaves")
     * @ORM\JoinColumn(name="winkel_id", referencedColumnName="id")
     */
    private $winkel;

    /**
     * @var Gezin
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Gezin", inversedBy="uitgaves")
     * @ORM\JoinColumn(name="gezin_id", referencedColumnName="id")
     */
    private $gezin;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bedrag
     *
     * @param float $bedrag
     *
     * @return Uitgave
     */
    public function setBedrag($bedrag)
    {
        $this->bedrag = $bedrag;

        return $this;
    }

    /**
     * Get bedrag
     *
     * @return float
     */
    public function getBedrag()
    {
        return $this->bedrag;
    }

    /**
     * Set fotoRekening
     *
     * @param string $fotoRekening
     *
     * @return Uitgave
     */
    public function setFotoRekening($fotoRekening)
    {
        $this->fotoRekening = $fotoRekening;

        return $this;
    }

    /**
     * Get fotoRekening
     *
     * @return string
     */
    public function getFotoRekening()
    {
        return $this->fotoRekening;
    }

    /**
     * Set betaaldDoor
     *
     * @param string $betaaldDoor
     *
     * @return Uitgave
     */
    public function setBetaaldDoor($betaaldDoor)
    {
        $this->betaaldDoor = $betaaldDoor;

        return $this;
    }

    /**
     * Get betaaldDoor
     *
     * @return string
     */
    public function getBetaaldDoor()
    {
        return $this->betaaldDoor;
    }

    /**
     * Set uitgegevenOp
     *
     * @param \DateTime $uitgegevenOp
     *
     * @return Uitgave
     */
    public function setUitgegevenOp($uitgegevenOp)
    {
        $this->uitgegevenOp = $uitgegevenOp;

        return $this;
    }

    /**
     * Get uitgegevenOp
     *
     * @return \DateTime
     */
    public function getUitgegevenOp()
    {
        return $this->uitgegevenOp;
    }

    /**
     * Set locatie
     *
     * @param string $locatie
     *
     * @return Uitgave
     */
    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;

        return $this;
    }

    /**
     * Get locatie
     *
     * @return string
     */
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * Add category
     *
     * @param Categorie $category
     *
     * @return Uitgave
     */
    public function addCategory(Categorie $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param Categorie $category
     */
    public function removeCategory(Categorie $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set winkel
     *
     * @param Winkel $winkel
     *
     * @return Uitgave
     */
    public function setWinkel(Winkel $winkel = null)
    {
        $this->winkel = $winkel;

        return $this;
    }

    /**
     * Get winkel
     *
     * @return Winkel
     */
    public function getWinkel()
    {
        return $this->winkel;
    }

    /**
     * Set gezin
     *
     * @param Gezin $gezin
     *
     * @return Uitgave
     */
    public function setGezin(Gezin $gezin = null)
    {
        $this->gezin = $gezin;

        return $this;
    }

    /**
     * Get gezin
     *
     * @return Gezin
     */
    public function getGezin()
    {
        return $this->gezin;
    }
}
