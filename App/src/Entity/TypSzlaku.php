<?php

namespace App\Entity;

use App\Repository\TypSzlakuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypSzlakuRepository::class)]
class TypSzlaku
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa_typu_szlaku = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwaTypuSzlaku(): ?string
    {
        return $this->nazwa_typu_szlaku;
    }

    public function setNazwaTypuSzlaku(string $nazwa_typu_szlaku): static
    {
        $this->nazwa_typu_szlaku = $nazwa_typu_szlaku;

        return $this;
    }
}
