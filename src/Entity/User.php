<?php

namespace KwUser\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity(repositoryClass="KwUser\Repository\UserRepository")
 * @ORM\Table(name="users",uniqueConstraints={@ORM\UniqueConstraint(name="email_idx",columns={"email"}), @ORM\UniqueConstraint(name="domain_idx",columns={"domain"})})
 */
class User
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255)
     * @var string
     */
    protected $email;

    /**
     * @ORM\Column(type="string",length=255)
     * @var string
     */
    protected $password;

    /**
     * @ORM\Column(type="string",length=64,nullable=true)
     * @var string
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string",length=64,nullable=true)
     * @var string
     */
    protected $lastName;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    protected $registeredAt;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->registeredAt = new DateTime();
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param \DateTime $registeredAt
     */
    public function setRegisteredAt($registeredAt)
    {
        $this->registeredAt = $registeredAt;
    }

    /**
     * @return \DateTime
     */
    public function getRegisteredAt()
    {
        return $this->registeredAt;
    }
}
