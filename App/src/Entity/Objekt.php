<?php

namespace App\Entity;

use App\Repository\ObjektRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjektRepository::class)]
class Objekt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $number = null;

    #[ORM\Column(nullable: true)]
    private ?float $rate = null;

    #[ORM\Column]
    private ?float $longitude = null;

    #[ORM\Column]
    private ?float $latitude = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $open_hour_monday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $close_hour_monday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $open_hour_tuesday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $close_hour_tuesday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $open_hour_wednesday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $close_hour_wednesday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $open_hour_thursday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $close_hour_thursday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $open_hour_friday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $close_hour_friday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $open_hour_saturday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $close_hour_saturday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $open_hour_sunday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $close_hour_sunday = null;

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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): static
    {
        $this->number = $number;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(?float $rate): static
    {
        $this->rate = $rate;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getOpenHourMonday(): ?\DateTimeInterface
    {
        return $this->open_hour_monday;
    }

    public function setOpenHourMonday(?\DateTimeInterface $open_hour_monday): static
    {
        $this->open_hour_monday = $open_hour_monday;

        return $this;
    }

    public function getCloseHourMonday(): ?\DateTimeInterface
    {
        return $this->close_hour_monday;
    }

    public function setCloseHourMonday(?\DateTimeInterface $close_hour_monday): static
    {
        $this->close_hour_monday = $close_hour_monday;

        return $this;
    }

    public function getOpenHourTuesday(): ?\DateTimeInterface
    {
        return $this->open_hour_tuesday;
    }

    public function setOpenHourTuesday(?\DateTimeInterface $open_hour_tuesday): static
    {
        $this->open_hour_tuesday = $open_hour_tuesday;

        return $this;
    }

    public function getCloseHourTuesday(): ?\DateTimeInterface
    {
        return $this->close_hour_tuesday;
    }

    public function setCloseHourTuesday(?\DateTimeInterface $close_hour_tuesday): static
    {
        $this->close_hour_tuesday = $close_hour_tuesday;

        return $this;
    }

    public function getOpenHourWednesday(): ?\DateTimeInterface
    {
        return $this->open_hour_wednesday;
    }

    public function setOpenHourWednesday(?\DateTimeInterface $open_hour_wednesday): static
    {
        $this->open_hour_wednesday = $open_hour_wednesday;

        return $this;
    }

    public function getCloseHourWednesday(): ?\DateTimeInterface
    {
        return $this->close_hour_wednesday;
    }

    public function setCloseHourWednesday(?\DateTimeInterface $close_hour_wednesday): static
    {
        $this->close_hour_wednesday = $close_hour_wednesday;

        return $this;
    }

    public function getOpenHourThursday(): ?\DateTimeInterface
    {
        return $this->open_hour_thursday;
    }

    public function setOpenHourThursday(?\DateTimeInterface $open_hour_thursday): static
    {
        $this->open_hour_thursday = $open_hour_thursday;

        return $this;
    }

    public function getCloseHourThursday(): ?\DateTimeInterface
    {
        return $this->close_hour_thursday;
    }

    public function setCloseHourThursday(?\DateTimeInterface $close_hour_thursday): static
    {
        $this->close_hour_thursday = $close_hour_thursday;

        return $this;
    }

    public function getOpenHourFriday(): ?\DateTimeInterface
    {
        return $this->open_hour_friday;
    }

    public function setOpenHourFriday(?\DateTimeInterface $open_hour_friday): static
    {
        $this->open_hour_friday = $open_hour_friday;

        return $this;
    }

    public function getCloseHourFriday(): ?\DateTimeInterface
    {
        return $this->close_hour_friday;
    }

    public function setCloseHourFriday(?\DateTimeInterface $close_hour_friday): static
    {
        $this->close_hour_friday = $close_hour_friday;

        return $this;
    }

    public function getOpenHourSaturday(): ?\DateTimeInterface
    {
        return $this->open_hour_saturday;
    }

    public function setOpenHourSaturday(?\DateTimeInterface $open_hour_saturday): static
    {
        $this->open_hour_saturday = $open_hour_saturday;

        return $this;
    }

    public function getCloseHourSaturday(): ?\DateTimeInterface
    {
        return $this->close_hour_saturday;
    }

    public function setCloseHourSaturday(?\DateTimeInterface $close_hour_saturday): static
    {
        $this->close_hour_saturday = $close_hour_saturday;

        return $this;
    }

    public function getOpenHourSunday(): ?\DateTimeInterface
    {
        return $this->open_hour_sunday;
    }

    public function setOpenHourSunday(?\DateTimeInterface $open_hour_sunday): static
    {
        $this->open_hour_sunday = $open_hour_sunday;

        return $this;
    }

    public function getCloseHourSunday(): ?\DateTimeInterface
    {
        return $this->close_hour_sunday;
    }

    public function setCloseHourSunday(?\DateTimeInterface $close_hour_sunday): static
    {
        $this->close_hour_sunday = $close_hour_sunday;

        return $this;
    }
}
