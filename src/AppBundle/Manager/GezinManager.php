<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Gebruiker;
use AppBundle\Entity\Gezin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class GezinManager
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
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * GezinManager constructor.
     * @param EntityManagerInterface $em
     * @param RouterInterface $router
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(EntityManagerInterface $em, RouterInterface $router, TokenStorageInterface $tokenStorage)
    {
        $this->em = $em;
        $this->router = $router;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @param Gezin $gezin
     *
     * @throws \Exception
     */
    public function controleerOpGezin(Gezin $gezin)
    {
        /** @var Gebruiker $gebruiker */
        $gebruiker = $this->tokenStorage->getToken()->getUser();

        if ($gebruiker->getGezin() !== null) {
            throw new \Exception();
        }

        $gezin->addGebruiker($gebruiker);
    }

    /**
     * @param FormInterface $form
     * @param Gezin $gezin
     *
     * @return string
     */
    public function verdeel(FormInterface $form, Gezin $gezin)
    {
        $formName = $form->getClickedButton()->getName();

        return $this->$formName($gezin);
    }

    /**
     * @param Gezin $gezin
     *
     * @return null|string
     */
    private function opslaan(Gezin $gezin)
    {
        $this->em->persist($gezin);
        $this->em->flush();

        return $this->router->generate('overzicht');
    }

    /**
     * @param Gezin $gezin
     *
     * @return null|string
     */
    private function annuleer(Gezin $gezin)
    {
        return $this->router->generate('overzicht');
    }
}
