<?php

namespace AppBundle\Controller\LoggedIn;

use AppBundle\Manager\GezinsManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GezinsController extends Controller
{
    /**
     * @var GezinsManager
     */
    private $manager;

    /**
     * GezinsController constructor.
     * @param GezinsManager $manager
     */
    public function __construct(GezinsManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route("/overview", name="overzicht")
     * @Template("LoggedIn/Overview.twig")
     */
    public function indexAction()
    {
       return [
           'categorien' => $this->manager->getCategorien(),
           'winkels' => $this->manager->getWinkels(),
           'periodes' => $this->manager->getPeriodes(),
           'uitgaven' => $this->manager->getUitgaven(),
           'gebruikers' => $this->manager->getGebruikers()
       ];
    }
}
