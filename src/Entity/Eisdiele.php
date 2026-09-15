<?php

namespace App\Entity;

use App\Repository\EisdieleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EisdieleRepository::class)]
class Eisdiele
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $stadt = null;

    #[ORM\Column]
    private ?float $bewertung = null;

    #[ORM\Column(length: 255)]
    private ?string $lieblingssorte = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getStadt(): ?string
    {
        return $this->stadt;
    }

    public function setStadt(string $stadt): static
    {
        $this->stadt = $stadt;

        return $this;
    }

    public function getBewertung(): ?float
    {
        return $this->bewertung;
    }

    public function setBewertung(float $bewertung): static
    {
        $this->bewertung = $bewertung;

        return $this;
    }

    public function getLieblingssorte(): ?string
    {
        return $this->lieblingssorte;
    }

    public function setLieblingssorte(string $lieblingssorte): static
    {
        $this->lieblingssorte = $lieblingssorte;

        return $this;
    }
}
