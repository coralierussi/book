<?php

namespace App\Entity;

use App\Repository\AuteursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Faker\Test\Provider\Collection;

#[ORM\Entity(repositoryClass: AuteursRepository::class)]
class Auteurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Name>
     */
    #[ORM\ManyToMany(targetEntity: Name::class,inversedBy:"auteur")]
    private Collection $name;

    #[ORM\Column(length: 40)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?int $Age = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_birthday = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(?int $Age): static
    {
        $this->Age = $Age;

        return $this;
    }

    public function getDateBirthday(): ?\DateTimeInterface
    {
        return $this->date_birthday;
    }

    public function setDateBirthday(?\DateTimeInterface $date_birthday): static
    {
        $this->date_birthday = $date_birthday;

        return $this;
    }
}
