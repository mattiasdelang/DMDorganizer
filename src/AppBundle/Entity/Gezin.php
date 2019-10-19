<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gezin
 *
 * @ORM\Table(name="gezin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GezinRepository")
 */
class Gezin
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
     * @var Collection
     *
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Gebruiker", mappedBy="gezin")
     */
    private $gebruikers;

    /**
     * @var Collection
     *
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Periode", mappedBy="gezin")
     */
    private $periodes;

    /**
     * @var Collection
     *
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Winkel", mappedBy="gezin")
     */
    private $winkels;

    /**
     * @var Collection
     *
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Uitgave", mappedBy="gezin")
     */
    private $uitgaves;

    /**
     * @var Collection
     *
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Categorie", mappedBy="gezin")
     */
    private $categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gebruikers = new ArrayCollection();
        $this->periodes = new ArrayCollection();
        $this->winkels = new ArrayCollection();
        $this->uitgaves = new ArrayCollection();
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
     * Add gebruiker
     *
     * @param Gebruiker $gebruiker
     *
     * @return Gezin
     */
    public function addGebruiker(Gebruiker $gebruiker)
    {
        $this->gebruikers[] = $gebruiker;
        $gebruiker->setGezin($this);

        return $this;
    }

    /**
     * Remove gebruiker
     *
     * @param Gebruiker $gebruiker
     */
    public function removeGebruiker(Gebruiker $gebruiker)
    {
        $this->gebruikers->removeElement($gebruiker);
    }

    /**
     * Get gebruikers
     *
     * @return Collection
     */
    public function getGebruikers()
    {
        return $this->gebruikers;
    }

    /**
     * Add periode
     *
     * @param Periode $periode
     *
     * @return Gezin
     */
    public function addPeriode(Periode $periode)
    {
        $this->periodes[] = $periode;
        $periode->setGezin($this);

        return $this;
    }

    /**
     * Remove periode
     *
     * @param Periode $periode
     */
    public function removePeriode(Periode $periode)
    {
        $this->periodes->removeElement($periode);
    }

    /**
     * Get periodes
     *
     * @return Collection
     */
    public function getPeriodes()
    {
        return $this->periodes;
    }

    /**
     * Add winkel
     *
     * @param Winkel $winkel
     *
     * @return Gezin
     */
    public function addWinkel(Winkel $winkel)
    {
        $this->winkels[] = $winkel;
        $winkel->setGezin($this);

        return $this;
    }

    /**
     * Remove winkel
     *
     * @param Winkel $winkel
     */
    public function removeWinkel(Winkel $winkel)
    {
        $this->winkels->removeElement($winkel);
    }

    /**
     * Get winkels
     *
     * @return Collection
     */
    public function getWinkels()
    {
        return $this->winkels;
    }

    /**
     * Add uitgafe
     *
     * @param Uitgave $uitgafe
     *
     * @return Gezin
     */
    public function addUitgafe(Uitgave $uitgafe)
    {
        $this->uitgaves[] = $uitgafe;
        $uitgafe->setGezin($this);

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
     * Add category
     *
     * @param Categorie $category
     *
     * @return Gezin
     */
    public function addCategory(Categorie $category)
    {
        $this->categories[] = $category;
        $category->setGezin($this);

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
}
