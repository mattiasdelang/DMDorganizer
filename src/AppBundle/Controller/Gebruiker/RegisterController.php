<?php

namespace AppBundle\Controller\Gebruiker;

use AppBundle\Entity\Gebruiker;
use AppBundle\Form\RegisterType;
use AppBundle\Manager\GebruikerManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RegisterController extends Controller
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @var GebruikerManager
     */
    private $manager;

    /**
     * RegisterController constructor.
     *
     * @param FormFactoryInterface $formFactory
     * @param GebruikerManager $manager
     */
    function __construct(FormFactoryInterface $formFactory, GebruikerManager $manager)
    {
        $this->formFactory = $formFactory;
        $this->manager = $manager;
    }

    /**
     * @Route("/register", name="register")
     * @Template("Gebruiker/Register.twig")
     *
     * @param Request $request
     *
     * @return array
     */
    public function indexAction(Request $request)
    {
        $gebruiker = new Gebruiker();

        $form = $this->formFactory->create(RegisterType::class, $gebruiker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $form->getClickedButton())
        {
            return new RedirectResponse($this->manager->verdeel($form, $gebruiker));
        }

        return [
            'form' => $form->createView()
        ];
    }
}
