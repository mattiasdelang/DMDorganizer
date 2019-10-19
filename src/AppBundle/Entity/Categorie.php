<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorieRepository")
 */
class Categorie implements GezinInterface
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
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Uitgave", inversedBy="categories")
     * @ORM\JoinTable(name="categorie_uitgave")
     */
    private $uitgaves;

    /**
     * @var Gezin
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Gezin", inversedBy="categories")
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
     * @return Categorie
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
     * Add uitgafe
     *
     * @param Uitgave $uitgafe
     *
     * @return Categorie
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
     * @return Collection
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
     * @return Categorie
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
