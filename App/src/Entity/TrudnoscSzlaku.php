<?php

namespace App\Entity;

use App\Repository\TrudnoscSzlakuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrudnoscSzlakuRepository::class)]
class TrudnoscSzlaku
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $poziom_trudnosci = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoziomTrudnosci(): ?float
    {
        return $this->poziom_trudnosci;
    }

    public function setPoziomTrudnosci(float $poziom_trudnosci): static
    {
        $this->poziom_trudnosci = $poziom_trudnosci;

        return $this;
    }
}
