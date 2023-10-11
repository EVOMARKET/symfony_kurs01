<?php

namespace App\Entity;

use App\Repository\NotatkiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotatkiRepository::class)]
class Notatki
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(length: 2000)]
    private ?string $ContentNote = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __construct(string $Title, string $ContentNote) {
        $this->Title = $Title;
        $this->ContentNote = $ContentNote;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): static
    {
        $this->Title = $Title;

        return $this;
    }

    public function getContentNote(): ?string
    {
        return $this->ContentNote;
    }

    public function setContentNote(string $ContentNote): static
    {
        $this->ContentNote = $ContentNote;

        return $this;
    }
}
