<?php

namespace AppBundle\Controller\LoggedIn;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GezinsController extends Controller
{
    /**
     * @Route("/overview", name="overzicht")
     */
    public function indexAction(Request $request)
    {
       return [];
    }
}
