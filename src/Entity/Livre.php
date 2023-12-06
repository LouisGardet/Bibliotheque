<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Titre = null;

    #[ORM\Column(length: 255)]
    private ?string $Auteur = null;

    #[ORM\Column]
    private ?int $Genre = null;

    #[ORM\Column]
    private ?int $Pages = null;

    #[ORM\Column(length: 255)]
    private ?string $Resume = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $Publication = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): static
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): static
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getGenre(): ?int
    {
        return $this->Genre;
    }

    public function setGenre(int $Genre): static
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getPages(): ?int
    {
        return $this->Pages;
    }

    public function setPages(int $Pages): static
    {
        $this->Pages = $Pages;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->Resume;
    }

    public function setResume(string $Resume): static
    {
        $this->Resume = $Resume;

        return $this;
    }

    public function getPublication(): ?\DateTimeImmutable
    {
        return $this->Publication;
    }

    public function setPublication(\DateTimeImmutable $Publication): static
    {
        $this->Publication = $Publication;

        return $this;
    }
}
