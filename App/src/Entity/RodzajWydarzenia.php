<?php

namespace App\Entity;

use App\Repository\RodzajWydarzeniaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RodzajWydarzeniaRepository::class)]
class RodzajWydarzenia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa_rodzaju = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwaRodzaju(): ?string
    {
        return $this->nazwa_rodzaju;
    }

    public function setNazwaRodzaju(string $nazwa_rodzaju): static
    {
        $this->nazwa_rodzaju = $nazwa_rodzaju;

        return $this;
    }
}
