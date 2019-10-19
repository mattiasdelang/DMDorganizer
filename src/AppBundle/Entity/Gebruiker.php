<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Gebruiker
 *
 * @ORM\Table(name="gebruiker")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GebruikerRepository")
 * @UniqueEntity(fields="gebruikersnaam", message="Username already taken")
 */
class Gebruiker implements UserInterface, GezinInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="gebruikersnaam", type="string", length=255)
     */
    private $gebruikersnaam;

    /**
     * @var string
     *
     * @ORM\Column(name="wachtwoord", type="string", length=255)
     */
    private $wachtwoord;

    /**
     * @var Gezin
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Gezin", inversedBy="gebruikers")
     * @ORM\JoinColumn(name="gezin_id", referencedColumnName="id")
     */
    private $gezin;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gebruikersnaam
     *
     * @param string $gebruikersnaam
     *
     * @return Gebruiker
     */
    public function setGebruikersnaam($gebruikersnaam)
    {
        $this->gebruikersnaam = $gebruikersnaam;

        return $this;
    }

    /**
     * Get gebruikersnaam
     *
     * @return string
     */
    public function getGebruikersnaam()
    {
        return $this->gebruikersnaam;
    }

    /**
     * Set wachtwoord
     *
     * @param string $wachtwoord
     *
     * @return Gebruiker
     */
    public function setWachtwoord($wachtwoord)
    {
        $this->wachtwoord = $wachtwoord;

        return $this;
    }

    /**
     * Get wachtwoord
     *
     * @return string
     */
    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string|null The encoded password if any
     */
    public function getPassword()
    {
        return $this->wachtwoord;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->gebruikersnaam;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Set gezin
     *
     * @param Gezin $gezin
     *
     * @return Gebruiker
     */
    public function setGezin(Gezin $gezin = null)
    {
        $this->gezin = $gezin;

        return $this;
    }

    /**
     * Get gezin
     *
     * @return Gezin
     */
    public function getGezin()
    {
        return $this->gezin;
    }
}
