<?php

namespace AppBundle\Controller\LoggedIn;

use AppBundle\Entity\Gebruiker;
use AppBundle\Manager\OverzichtManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class OverzichtController extends Controller
{
    /**
     * @var OverzichtManager
     */
    private $manager;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * OverzichtController constructor.
     * @param OverzichtManager $manager
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(OverzichtManager $manager, TokenStorageInterface $tokenStorage)
    {
        $this->manager = $manager;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @Route("/overview", name="overzicht")
     * @Template("LoggedIn/Overview.twig")
     *
     * @return array
     */
    public function indexAction()
    {
        /** @var Gebruiker $gebruiker */
        $gebruiker = $this->tokenStorage->getToken()->getUser();

        if ($gebruiker->getGezin() === null) {
            return [];
        }

        return [
            'categorien' => $this->manager->getCategorien(),
            'winkels' => $this->manager->getWinkels(),
            'periodes' => $this->manager->getPeriodes(),
            'uitgaven' => $this->manager->getUitgaven(),
            'gebruikers' => $this->manager->getGebruikers()
        ];
    }
}
