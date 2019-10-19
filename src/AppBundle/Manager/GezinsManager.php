<?php

namespace AppBundle\Manager;

use Doctrine\ORM\EntityManagerInterface;

class GezinsManager
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

    public function getCategorien()
    {
        return [];
    }

    public function getWinkels()
    {
        return [];
    }

    public function getPeriodes()
    {
        return [];
    }

    public function getUitgaven()
    {
        return [];
    }

    public function getGebruikers()
    {
        return [];
    }
}
