<?php

namespace App\Entity;
use App\Entity\Auta;
use App\Repository\AutosPhotosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AutosPhotosRepository::class)]
class AutosPhotos
{
    public const PATH_TO_AUTOS_IMAGES = 'images/auta';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $path = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alt = null;

    #[ORM\ManyToOne(inversedBy: 'autosPhotos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Auta $auto = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): static
    {
        $this->alt = $alt;

        return $this;
    }

    public function getAuto(): ?Auta
    {
        return $this->auto;
    }

    public function setAuto(?Auta $auto): self
    {
        $this->auto = $auto;

        return $this;
    }
}
