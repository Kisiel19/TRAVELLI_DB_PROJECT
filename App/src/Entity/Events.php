<?php

namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventsRepository::class)]
class Events
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa_wydarzenia = null;

    #[ORM\Column]
    private ?bool $czy_zatwierdzone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwaWydarzenia(): ?string
    {
        return $this->nazwa_wydarzenia;
    }

    public function setNazwaWydarzenia(string $nazwa_wydarzenia): static
    {
        $this->nazwa_wydarzenia = $nazwa_wydarzenia;

        return $this;
    }

    public function isCzyZatwierdzone(): ?bool
    {
        return $this->czy_zatwierdzone;
    }

    public function setCzyZatwierdzone(bool $czy_zatwierdzone): static
    {
        $this->czy_zatwierdzone = $czy_zatwierdzone;

        return $this;
    }
}
