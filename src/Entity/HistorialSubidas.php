<?php

namespace App\Entity;

use App\Repository\HistorialSubidasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistorialSubidasRepository::class)]
class HistorialSubidas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Empresa $empresa = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $nombreOriginal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nombreBackup = null;

    #[ORM\Column]
    private ?\DateTime $fechaSubida = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpresa(): ?Empresa
    {
        return $this->empresa;
    }

    public function setEmpresa(?Empresa $empresa): static
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getNombreOriginal(): ?string
    {
        return $this->nombreOriginal;
    }

    public function setNombreOriginal(string $nombreOriginal): static
    {
        $this->nombreOriginal = $nombreOriginal;

        return $this;
    }

    public function getNombreBackup(): ?string
    {
        return $this->nombreBackup;
    }

    public function setNombreBackup(?string $nombreBackup): static
    {
        $this->nombreBackup = $nombreBackup;

        return $this;
    }

    public function getFechaSubida(): ?\DateTime
    {
        return $this->fechaSubida;
    }

    public function setFechaSubida(\DateTime $fechaSubida): static
    {
        $this->fechaSubida = $fechaSubida;

        return $this;
    }
}
