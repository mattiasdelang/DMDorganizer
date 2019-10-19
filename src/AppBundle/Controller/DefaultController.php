<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;

class DefaultController
{
    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * DefaultController constructor.
     * @param RouterInterface $router
     */
    function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @Route(path="/", name="homepage")
     */
    public function indexAction()
    {
        return new RedirectResponse($this->router->generate('login'));
    }
}
