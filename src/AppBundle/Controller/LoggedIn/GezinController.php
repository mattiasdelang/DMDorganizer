<?php

namespace AppBundle\Controller\LoggedIn;

use AppBundle\Entity\Gezin;
use AppBundle\Form\GezinType;
use AppBundle\Manager\GezinManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GezinController
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @var GezinManager
     */
    private $gezinManager;

    /**
     * GezinController constructor.
     * @param FormFactoryInterface $formFactory
     * @param GezinManager $gezinManager
     */
    public function __construct(FormFactoryInterface $formFactory, GezinManager $gezinManager)
    {
        $this->formFactory = $formFactory;
        $this->gezinManager = $gezinManager;
    }

    /**
     * @Route("/family", name="gezin")
     * @Template("LoggedIn/Gezin.twig")
     *
     * @param Request $request
     *
     * @return array|RedirectResponse
     */
    public function gezinAction(Request $request)
    {
        $gezin = new Gezin();

        $this->gezinManager->controleerOpGezin($gezin);

        $form = $this->formFactory->create(GezinType::class, $gezin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $form->getClickedButton()) {
            return new RedirectResponse($this->gezinManager->verdeel($form, $gezin));
        }

        return [
            'form' => $form->createView()
        ];
    }
}