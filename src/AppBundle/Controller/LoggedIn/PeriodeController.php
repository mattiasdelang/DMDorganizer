<?php

namespace AppBundle\Controller\LoggedIn;

use AppBundle\Form\PeriodeType;
use AppBundle\Manager\PeriodeManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PeriodeController extends Controller
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @var PeriodeManager
     */
    private $manager;

    /**
     * PeriodeController constructor.
     * @param FormFactoryInterface $formFactory
     * @param PeriodeManager $manager
     */
    public function __construct(FormFactoryInterface $formFactory, PeriodeManager $manager)
    {
        $this->formFactory = $formFactory;
        $this->manager = $manager;
    }

    /**
     * @Route("/period/{uid}", name="periode")
     * @Template("LoggedIn/Periode.twig")
     *
     * @param Request $request
     *
     * @return array|RedirectResponse
     */
    public function indexAction(Request $request)
    {
        $periode = $this->manager->ophalenOfAanmaken($request);

        $form = $this->formFactory->create(PeriodeType::class, $periode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $form->getClickedButton()) {
            return new RedirectResponse($this->manager->verdeel($form, $periode));
        }

        return [
            'form' => $form->createView()
        ];
    }
}
