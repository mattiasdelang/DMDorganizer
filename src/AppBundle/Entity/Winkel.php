<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Winkel
 *
 * @ORM\Table(name="winkel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WinkelRepository")
 */
class Winkel implements GezinInterface
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
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255)
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(name="locatie", type="string", length=255)
     */
    private $locatie;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var Collection
     *
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Uitgave", mappedBy="winkel")
     */
    private $uitgaves;

    /**
     * @var Gezin
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Gezin", inversedBy="winkels")
     * @ORM\JoinColumn(name="gezin_id", referencedColumnName="id")
     */
    private $gezin;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->uitgaves = new ArrayCollection();
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
     * Set naam
     *
     * @param string $naam
     *
     * @return Winkel
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set locatie
     *
     * @param string $locatie
     *
     * @return Winkel
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
     * Set logo
     *
     * @param string $logo
     *
     * @return Winkel
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Add uitgafe
     *
     * @param Uitgave $uitgafe
     *
     * @return Winkel
     */
    public function addUitgafe(Uitgave $uitgafe)
    {
        $this->uitgaves[] = $uitgafe;

        return $this;
    }

    /**
     * Remove uitgafe
     *
     * @param Uitgave $uitgafe
     */
    public function removeUitgafe(Uitgave $uitgafe)
    {
        $this->uitgaves->removeElement($uitgafe);
    }

    /**
     * Get uitgaves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUitgaves()
    {
        return $this->uitgaves;
    }

    /**
     * Set gezin
     *
     * @param Gezin $gezin
     *
     * @return Winkel
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
