<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Gebruiker;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class GebruikerManager
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
     * @var UserPasswordEncoderInterface
     */
    private $pwEncoder;

    /**
     * GebruikerManager constructor.
     * @param EntityManagerInterface $em
     * @param RouterInterface $router
     * @param UserPasswordEncoderInterface $pwEncoder
     */
    function __construct(EntityManagerInterface $em, RouterInterface $router, UserPasswordEncoderInterface $pwEncoder)
        {
        $this->em = $em;
        $this->router = $router;
        $this->pwEncoder = $pwEncoder;
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
        $gebruiker->setWachtwoord($this->pwEncoder->encodePassword($gebruiker, $gebruiker->getWachtwoord()));

        $this->em->persist($gebruiker);
        $this->em->flush();

        return $this->router->generate('login');
    }
}
