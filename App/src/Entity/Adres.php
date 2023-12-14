<?php

namespace App\Entity;

use App\Repository\AdresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresRepository::class)]
class Adres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $kraj = null;

    #[ORM\Column(length: 255)]
    private ?string $miasto = null;

    #[ORM\Column(length: 255)]
    private ?string $ulica = null;

    #[ORM\Column(length: 255)]
    private ?string $kod_pocz = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKraj(): ?string
    {
        return $this->kraj;
    }

    public function setKraj(string $kraj): static
    {
        $this->kraj = $kraj;

        return $this;
    }

    public function getMiasto(): ?string
    {
        return $this->miasto;
    }

    public function setMiasto(string $miasto): static
    {
        $this->miasto = $miasto;

        return $this;
    }

    public function getUlica(): ?string
    {
        return $this->ulica;
    }

    public function setUlica(string $ulica): static
    {
        $this->ulica = $ulica;

        return $this;
    }

    public function getKodPocz(): ?string
    {
        return $this->kod_pocz;
    }

    public function setKodPocz(string $kod_pocz): static
    {
        $this->kod_pocz = $kod_pocz;

        return $this;
    }
}
