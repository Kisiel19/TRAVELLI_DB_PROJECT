<?php

namespace App\Entity;

use App\Repository\TypObiektuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypObiektuRepository::class)]
class TypObiektu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa_typ = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwaTyp(): ?string
    {
        return $this->nazwa_typ;
    }

    public function setNazwaTyp(string $nazwa_typ): static
    {
        $this->nazwa_typ = $nazwa_typ;

        return $this;
    }
}
