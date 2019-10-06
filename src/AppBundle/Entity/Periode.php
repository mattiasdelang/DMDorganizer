<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periode
 *
 * @ORM\Table(name="periode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PeriodeRepository")
 */
class Periode
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
     * @var \DateTime
     *
     * @ORM\Column(name="van", type="datetime")
     */
    private $van;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tot", type="datetime")
     */
    private $tot;

    /**
     * @var string
     *
     * @ORM\Column(name="gebruikers", type="string", length=255)
     */
    private $gebruikers;


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
     * @return Periode
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
     * Set van
     *
     * @param \DateTime $van
     *
     * @return Periode
     */
    public function setVan($van)
    {
        $this->van = $van;

        return $this;
    }

    /**
     * Get van
     *
     * @return \DateTime
     */
    public function getVan()
    {
        return $this->van;
    }

    /**
     * Set tot
     *
     * @param \DateTime $tot
     *
     * @return Periode
     */
    public function setTot($tot)
    {
        $this->tot = $tot;

        return $this;
    }

    /**
     * Get tot
     *
     * @return \DateTime
     */
    public function getTot()
    {
        return $this->tot;
    }

    /**
     * Set gebruikers
     *
     * @param string $gebruikers
     *
     * @return Periode
     */
    public function setGebruikers($gebruikers)
    {
        $this->gebruikers = $gebruikers;

        return $this;
    }

    /**
     * Get gebruikers
     *
     * @return string
     */
    public function getGebruikers()
    {
        return $this->gebruikers;
    }
}

