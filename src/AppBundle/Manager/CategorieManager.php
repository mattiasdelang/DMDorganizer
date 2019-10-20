<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Gebruiker;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Routing\RouterInterface;

class CategorieManager
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * CategorieManager constructor.
     * @param EntityManagerInterface $em
     * @param RouterInterface $router
     */
    public function __construct(EntityManagerInterface $em, RouterInterface $router)
    {
        $this->em = $em;
        $this->router = $router;
    }

    /**
     * @param FormInterface $form
     * @param Gebruiker $gebruiker
     *
     * @return string
     */
    public function verdeel(FormInterface $form, Gebruiker $gebruiker)
    {
        $formName = $form->getClickedButton()->getName();

        return $this->$formName($gebruiker);
    }

    /**
     * @param Gebruiker $gebruiker
     *
     * @return null|string
     */
    private function opslaan(Gebruiker $gebruiker)
    {
        $this->em->persist($gebruiker);
        $this->em->flush();

        return $this->router->generate('login');
    }
}
