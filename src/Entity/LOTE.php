<?php

namespace App\Entity;

use App\Repository\LOTERepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LOTERepository::class)]
class LOTE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $lt_fecha_fabricacion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $lt_fecha_vencimiento = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLtFechaFabricacion(): ?\DateTimeInterface
    {
        return $this->lt_fecha_fabricacion;
    }

    public function setLtFechaFabricacion(\DateTimeInterface $lt_fecha_fabricacion): self
    {
        $this->lt_fecha_fabricacion = $lt_fecha_fabricacion;

        return $this;
    }

    public function getLtFechaVencimiento(): ?\DateTimeInterface
    {
        return $this->lt_fecha_vencimiento;
    }

    public function setLtFechaVencimiento(\DateTimeInterface $lt_fecha_vencimiento): self
    {
        $this->lt_fecha_vencimiento = $lt_fecha_vencimiento;

        return $this;
    }
}
