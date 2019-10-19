<?php

namespace AppBundle\Controller;

use AppBundle\Form\LoginType;
use AppBundle\Manager\GebruikerManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LoginController extends Controller
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
     * LoginController constructor.
     * @param FormFactoryInterface $formFactory
     * @param GebruikerManager $manager
     */
    function __construct(FormFactoryInterface $formFactory, GebruikerManager $manager)
    {
        $this->formFactory = $formFactory;
        $this->manager = $manager;
    }

    /**
     * @Route("/login", name="login")
     * @Template("Login/form.html.twig")
     *
     * @param AuthenticationUtils $authenticationUtils
     *
     * @return array
     */
    public function indexAction(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $form = $this->formFactory->create(LoginType::class);

        return [
            'last_username' => $lastUsername,
            'error' => $error,
            'form' => $form->createView()
        ];
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        return [];
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function login_check()
    {
        return [];
    }
}
