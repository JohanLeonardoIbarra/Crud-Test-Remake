<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[Assert\UniqueEntity('email')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Regex(pattern: '/\d/', match: false, message: 'Your name cannot contain a number',)]
    private ?string $name;

    #[ORM\Column(length: 255)]
    #[Assert\Regex(pattern: '/\d/', match: false, message: 'Your surname cannot contain a number',)]
    private ?string $surname;

    #[ORM\Column(length: 255)]
    #[Assert\Email]
    private ?string $email;

    #[ORM\Column(length: 255, columnDefinition: "Enum('Man', 'Woman')")]
    #[Assert\Choice(['Man', 'Woman'])]
    private ?string $sex;

    /**
     * @param string|null $name
     * @param string|null $surname
     * @param string|null $email
     * @param string|null $sex
     */
    public function __construct(?string $name, ?string $surname, ?string $email, ?string $sex)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->sex = $sex;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }
}
