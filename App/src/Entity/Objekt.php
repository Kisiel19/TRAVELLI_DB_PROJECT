<?php

namespace App\Entity;

use App\Repository\ObjektRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

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

    #[ORM\Column(length: 8000, nullable: true)]
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

    #[ORM\Column]
    private ?bool $published = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $add_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $update_date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function __construct()
    {
        $this->add_date= new \DateTime("now");
        $this->update_date=new \DateTime('now');
    }

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
        if($name){
            $this->update_date=new \DateTime('now');
        }

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): static
    {
        $this->link = $link;
        if($link){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        if($description){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): static
    {
        $this->number = $number;
        if($number){
            $this->update_date=new \DateTime('now');
        }

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
        if($longitude){
            $this->update_date=new \DateTime('now');
        }

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;
        if($latitude){
            $this->update_date=new \DateTime('now');
        }

        return $this;
    }

    public function getOpenHourMonday(): ?\DateTimeInterface
    {
        return $this->open_hour_monday;
    }

    public function setOpenHourMonday(?\DateTimeInterface $open_hour_monday): static
    {
        $this->open_hour_monday = $open_hour_monday;
        if($open_hour_monday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getCloseHourMonday(): ?\DateTimeInterface
    {
        return $this->close_hour_monday;
    }

    public function setCloseHourMonday(?\DateTimeInterface $close_hour_monday): static
    {
        $this->close_hour_monday = $close_hour_monday;
        if($close_hour_monday){
            $this->update_date=new \DateTime('now');
        }

        return $this;
    }

    public function getOpenHourTuesday(): ?\DateTimeInterface
    {
        return $this->open_hour_tuesday;
    }

    public function setOpenHourTuesday(?\DateTimeInterface $open_hour_tuesday): static
    {
        $this->open_hour_tuesday = $open_hour_tuesday;
        if($open_hour_tuesday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getCloseHourTuesday(): ?\DateTimeInterface
    {
        return $this->close_hour_tuesday;
    }

    public function setCloseHourTuesday(?\DateTimeInterface $close_hour_tuesday): static
    {
        $this->close_hour_tuesday = $close_hour_tuesday;
        if($close_hour_tuesday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getOpenHourWednesday(): ?\DateTimeInterface
    {
        return $this->open_hour_wednesday;
    }

    public function setOpenHourWednesday(?\DateTimeInterface $open_hour_wednesday): static
    {
        $this->open_hour_wednesday = $open_hour_wednesday;
        if($open_hour_wednesday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getCloseHourWednesday(): ?\DateTimeInterface
    {
        return $this->close_hour_wednesday;
    }

    public function setCloseHourWednesday(?\DateTimeInterface $close_hour_wednesday): static
    {
        $this->close_hour_wednesday = $close_hour_wednesday;
        if($close_hour_wednesday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getOpenHourThursday(): ?\DateTimeInterface
    {
        return $this->open_hour_thursday;
    }

    public function setOpenHourThursday(?\DateTimeInterface $open_hour_thursday): static
    {
        $this->open_hour_thursday = $open_hour_thursday;
        if($open_hour_thursday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getCloseHourThursday(): ?\DateTimeInterface
    {
        return $this->close_hour_thursday;
    }

    public function setCloseHourThursday(?\DateTimeInterface $close_hour_thursday): static
    {
        $this->close_hour_thursday = $close_hour_thursday;
        if($close_hour_thursday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getOpenHourFriday(): ?\DateTimeInterface
    {
        return $this->open_hour_friday;
    }

    public function setOpenHourFriday(?\DateTimeInterface $open_hour_friday): static
    {
        $this->open_hour_friday = $open_hour_friday;
        if( $open_hour_friday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getCloseHourFriday(): ?\DateTimeInterface
    {
        return $this->close_hour_friday;
    }

    public function setCloseHourFriday(?\DateTimeInterface $close_hour_friday): static
    {
        $this->close_hour_friday = $close_hour_friday;
        if( $close_hour_friday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getOpenHourSaturday(): ?\DateTimeInterface
    {
        return $this->open_hour_saturday;
    }

    public function setOpenHourSaturday(?\DateTimeInterface $open_hour_saturday): static
    {
        $this->open_hour_saturday = $open_hour_saturday;
        if( $open_hour_saturday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getCloseHourSaturday(): ?\DateTimeInterface
    {
        return $this->close_hour_saturday;
    }

    public function setCloseHourSaturday(?\DateTimeInterface $close_hour_saturday): static
    {
        $this->close_hour_saturday = $close_hour_saturday;
        if( $close_hour_saturday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getOpenHourSunday(): ?\DateTimeInterface
    {
        return $this->open_hour_sunday;
    }

    public function setOpenHourSunday(?\DateTimeInterface $open_hour_sunday): static
    {
        $this->open_hour_sunday = $open_hour_sunday;
        if($open_hour_sunday){
            $this->update_date=new \DateTime('now');
        }
        return $this;
    }

    public function getCloseHourSunday(): ?\DateTimeInterface
    {
        return $this->close_hour_sunday;
    }

    public function setCloseHourSunday(?\DateTimeInterface $close_hour_sunday): static
    {
        $this->close_hour_sunday = $close_hour_sunday;
        if( $close_hour_sunday){
            $this->update_date=new \DateTime('now');
        }
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

    public function getAddDate(): ?\DateTimeInterface
    {
        return $this->add_date;
    }

    public function setAddDate(\DateTimeInterface $add_date): static
    {
        $this->add_date = $add_date;

        return $this;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->update_date;
    }

    public function setUpdateDate(\DateTimeInterface $update_date): static
    {
        $this->update_date = $update_date;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        if($image){
            $this->update_date=new \DateTime('now');
        }

        return $this;
    }
}
