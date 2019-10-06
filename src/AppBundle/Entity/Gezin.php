<?php

namespace AppBundle\Entity;

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
     * @var string
     *
     * @ORM\Column(name="gebruikers", type="string", length=255)
     */
    private $gebruikers;

    /**
     * @var string
     *
     * @ORM\Column(name="periodes", type="string", length=255)
     */
    private $periodes;

    /**
     * @var string
     *
     * @ORM\Column(name="uitgaven", type="string", length=255)
     */
    private $uitgaven;

    /**
     * @var string
     *
     * @ORM\Column(name="winkels", type="string", length=255)
     */
    private $winkels;

    /**
     * @var string
     *
     * @ORM\Column(name="categorien", type="string", length=255)
     */
    private $categorien;


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
     * Set gebruikers
     *
     * @param string $gebruikers
     *
     * @return Gezin
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

    /**
     * Set periodes
     *
     * @param string $periodes
     *
     * @return Gezin
     */
    public function setPeriodes($periodes)
    {
        $this->periodes = $periodes;

        return $this;
    }

    /**
     * Get periodes
     *
     * @return string
     */
    public function getPeriodes()
    {
        return $this->periodes;
    }

    /**
     * Set uitgaven
     *
     * @param string $uitgaven
     *
     * @return Gezin
     */
    public function setUitgaven($uitgaven)
    {
        $this->uitgaven = $uitgaven;

        return $this;
    }

    /**
     * Get uitgaven
     *
     * @return string
     */
    public function getUitgaven()
    {
        return $this->uitgaven;
    }

    /**
     * Set winkels
     *
     * @param string $winkels
     *
     * @return Gezin
     */
    public function setWinkels($winkels)
    {
        $this->winkels = $winkels;

        return $this;
    }

    /**
     * Get winkels
     *
     * @return string
     */
    public function getWinkels()
    {
        return $this->winkels;
    }

    /**
     * Set categorien
     *
     * @param string $categorien
     *
     * @return Gezin
     */
    public function setCategorien($categorien)
    {
        $this->categorien = $categorien;

        return $this;
    }

    /**
     * Get categorien
     *
     * @return string
     */
    public function getCategorien()
    {
        return $this->categorien;
    }
}

