<?php

namespace AppBundle\Controller\LoggedIn;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CategorieController extends Controller
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * CategorieController constructor.
     * @param FormFactoryInterface $formFactory
     */
    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * @Route("/categorie/{uid}", name="categorie")
     * @Template("LoggedIn/Overview.twig")
     */
    public function indexAction()
    {

    }
}
