<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Categorie;
use AppBundle\Entity\Gebruiker;
use AppBundle\Entity\Periode;
use AppBundle\Entity\Uitgave;
use AppBundle\Entity\Winkel;
use Doctrine\ORM\EntityManagerInterface;

class OverzichtManager
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * GebruikerManager constructor.
     * @param EntityManagerInterface $em
     */
    function __construct( EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @return Categorie[]|array
     */
    public function getCategorien()
    {
        return $this->em->getRepository(Categorie::class)->findAll();
    }

    /**
     * @return Winkel[]|array
     */
    public function getWinkels()
    {
        return $this->em->getRepository(Winkel::class)->findAll();
    }

    /**
     * @return Periode[]|array
     */
    public function getPeriodes()
    {
        return $this->em->getRepository(Periode::class)->findAll();
    }

    /**
     * @return Uitgave[]|array
     */
    public function getUitgaven()
    {
        return $this->em->getRepository(Uitgave::class)->findAll();
    }

    /**
     * @return Gebruiker[]|array
     */
    public function getGebruikers()
    {
        return $this->em->getRepository(Gebruiker::class)->findAll();
    }
}
