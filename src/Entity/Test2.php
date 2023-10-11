<?php

namespace App\Entity;

use App\Repository\Test2Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Test2Repository::class)]
class Test2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $IName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIName(): ?string
    {
        return $this->IName;
    }

    public function setIName(string $IName): static
    {
        $this->IName = $IName;

        return $this;
    }
}
