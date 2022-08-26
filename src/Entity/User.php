<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity('email', message: 'This email is already taken')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[Assert\Regex('/\d/', 'Your name cannot contain a number', null, false)]
    private ?string $name;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[Assert\Regex('/\d/', 'Your surname cannot contain a number', null, false)]
    private ?string $surname;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\Email]
    #[Assert\NotNull]
    #[Assert\NotBlank]
    private ?string $email;

    #[ORM\Column(length: 255, columnDefinition: "ENUM('Man', 'Woman')")]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[Assert\Choice(['Man', 'Woman'])]
    private ?string $sex;

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

    #[Ignore]
    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    #[SerializedName("sex")]
    public function getDetailSex(): string
    {
        return ($this->sex == "Man")? "I'm a Man": "I'm a Woman";
    }

    #[Ignore]
    #[SerializedName("fullName")]
    public function getFullName():string
    {
        return $this->name." ".$this->surname;
    }
}
