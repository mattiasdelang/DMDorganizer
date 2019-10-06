<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * uitgave
 *
 * @ORM\Table(name="uitgave")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\uitgaveRepository")
 */
class uitgave
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
     * @ORM\Column(name="winkel", type="string", length=255)
     */
    private $winkel;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="locatie", type="string", length=255)
     */
    private $locatie;


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
     * @return uitgave
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
     * @return uitgave
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
     * @return uitgave
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
     * @return uitgave
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
     * Set winkel
     *
     * @param string $winkel
     *
     * @return uitgave
     */
    public function setWinkel($winkel)
    {
        $this->winkel = $winkel;

        return $this;
    }

    /**
     * Get winkel
     *
     * @return string
     */
    public function getWinkel()
    {
        return $this->winkel;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return uitgave
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set locatie
     *
     * @param string $locatie
     *
     * @return uitgave
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
}

