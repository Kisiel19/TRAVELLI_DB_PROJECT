<?php

namespace App\Entity;

use App\Repository\ObszarGeograficznyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObszarGeograficznyRepository::class)]
class ObszarGeograficzny
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa_obszaru = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwaObszaru(): ?string
    {
        return $this->nazwa_obszaru;
    }

    public function setNazwaObszaru(string $nazwa_obszaru): static
    {
        $this->nazwa_obszaru = $nazwa_obszaru;

        return $this;
    }
}
