<?php

namespace App\Entity;

use App\Repository\PRODUCTORepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PRODUCTORepository::class)]
class PRODUCTO
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prd_nombre = null;

    #[ORM\Column]
    private ?int $prd_cantidad = null;

    #[ORM\Column]
    private ?int $prd_precio = null;

    #[ORM\Column]
    private ?int $prd_precio_unitario = null;

    #[ORM\Column]
    private ?int $prd_costo = null;

    #[ORM\Column]
    private ?bool $prd_iva = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $prd_unidad = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?PROVEEDOR $prov_code = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrdNombre(): ?string
    {
        return $this->prd_nombre;
    }

    public function setPrdNombre(string $prd_nombre): self
    {
        $this->prd_nombre = $prd_nombre;

        return $this;
    }

    public function getPrdCantidad(): ?int
    {
        return $this->prd_cantidad;
    }

    public function setPrdCantidad(int $prd_cantidad): self
    {
        $this->prd_cantidad = $prd_cantidad;

        return $this;
    }

    public function getPrdPrecio(): ?int
    {
        return $this->prd_precio;
    }

    public function setPrdPrecio(int $prd_precio): self
    {
        $this->prd_precio = $prd_precio;

        return $this;
    }

    public function getPrdPrecioUnitario(): ?int
    {
        return $this->prd_precio_unitario;
    }

    public function setPrdPrecioUnitario(int $prd_precio_unitario): self
    {
        $this->prd_precio_unitario = $prd_precio_unitario;

        return $this;
    }

    public function getPrdCosto(): ?int
    {
        return $this->prd_costo;
    }

    public function setPrdCosto(int $prd_costo): self
    {
        $this->prd_costo = $prd_costo;

        return $this;
    }

    public function isPrdIva(): ?bool
    {
        return $this->prd_iva;
    }

    public function setPrdIva(bool $prd_iva): self
    {
        $this->prd_iva = $prd_iva;

        return $this;
    }

    public function getPrdUnidad(): ?string
    {
        return $this->prd_unidad;
    }

    public function setPrdUnidad(string $prd_unidad): self
    {
        $this->prd_unidad = $prd_unidad;

        return $this;
    }

    public function getProvCode(): ?PROVEEDOR
    {
        return $this->prov_code;
    }

    public function setProvCode(PROVEEDOR $prov_code): self
    {
        $this->prov_code = $prov_code;

        return $this;
    }
}
