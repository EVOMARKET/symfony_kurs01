<?php

namespace App\Entity;

use App\Repository\AutaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AutaRepository::class)]
class Auta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null ;

    #[ORM\Column(length: 50)]
    private string $serial_nr;

    #[ORM\Column(length: 50)]
    private string $model;

    #[ORM\Column(length: 100)]
    private string $kolor;

    #[ORM\Column(length: 40)]
    private string $price;

    #[ORM\OneToMany(mappedBy: 'auto', targetEntity: AutosPhotos::class, orphanRemoval: true)]
    private Collection $autosPhotos;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $description = null;



    public function __construct()
    {
        $this->autosPhotos = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSerialNr(): ?string
    {
        return $this->serial_nr;
    }

    public function setSerialNr(string $serial_nr): static
    {
        $this->serial_nr = $serial_nr;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getKolor(): ?string
    {
        return $this->kolor;
    }

    public function setKolor(string $kolor): static
    {
        $this->kolor = $kolor;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, AutosPhotos>
     */
    public function getAutosPhotos(): Collection
    {
        return $this->autosPhotos;
    }

    public function addAutosPhoto(AutosPhotos $autosPhoto): static
    {
        if (!$this->autosPhotos->contains($autosPhoto)) {
            $this->autosPhotos->add($autosPhoto);
            $autosPhoto->setAuto($this);
        }

        return $this;
    }

    public function removeAutosPhoto(AutosPhotos $autosPhoto): static
    {
        if ($this->autosPhotos->removeElement($autosPhoto)) {
            // set the owning side to null (unless already changed)
            if ($autosPhoto->getAuto() === $this) {
                $autosPhoto->setAuto(null);
            }
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

        return $this;
    }


}
