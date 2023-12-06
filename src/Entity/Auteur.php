<?php

namespace App\Entity;

use App\Repository\AuteurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuteurRepository::class)]
class Auteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Birthday = null;

    #[ORM\Column]
    private ?int $Nationalite = null;

    #[ORM\Column(length: 255)]
    private ?string $Biographie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getBirthday(): ?string
    {
        return $this->Birthday;
    }

    public function setBirthday(string $Birthday): static
    {
        $this->Birthday = $Birthday;

        return $this;
    }

    public function getNationalite(): ?int
    {
        return $this->Nationalite;
    }

    public function setNationalite(int $Nationalite): static
    {
        $this->Nationalite = $Nationalite;

        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->Biographie;
    }

    public function setBiographie(string $Biographie): static
    {
        $this->Biographie = $Biographie;

        return $this;
    }
}
