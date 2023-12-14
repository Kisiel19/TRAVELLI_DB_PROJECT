<?php

namespace App\Entity;

use App\Repository\TrailsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrailsRepository::class)]
class Trails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?float $rate = null;

    #[ORM\Column]
    private ?float $start_point_latitude = null;

    #[ORM\Column]
    private ?float $start_point_longitude = null;

    #[ORM\Column]
    private ?float $end_point_latitude = null;

    #[ORM\Column]
    private ?float $end_point_langitude = null;

    #[ORM\Column]
    private ?float $distance = null;

    #[ORM\Column]
    private ?bool $published = null;

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

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(?float $rate): static
    {
        $this->rate = $rate;

        return $this;
    }

    public function getStartPointLatitude(): ?float
    {
        return $this->start_point_latitude;
    }

    public function setStartPointLatitude(float $start_point_latitude): static
    {
        $this->start_point_latitude = $start_point_latitude;

        return $this;
    }

    public function getStartPointLongitude(): ?float
    {
        return $this->start_point_longitude;
    }

    public function setStartPointLongitude(float $start_point_longitude): static
    {
        $this->start_point_longitude = $start_point_longitude;

        return $this;
    }

    public function getEndPointLatitude(): ?float
    {
        return $this->end_point_latitude;
    }

    public function setEndPointLatitude(float $end_point_latitude): static
    {
        $this->end_point_latitude = $end_point_latitude;

        return $this;
    }

    public function getEndPointLangitude(): ?float
    {
        return $this->end_point_langitude;
    }

    public function setEndPointLangitude(float $end_point_langitude): static
    {
        $this->end_point_langitude = $end_point_langitude;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(float $distance): static
    {
        $this->distance = $distance;

        return $this;
    }

    public function isPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(bool $published): static
    {
        $this->published = $published;

        return $this;
    }

}
