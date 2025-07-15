<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $namw = null;

    #[ORM\ManyToOne(inversedBy: 'category')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $produt_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamw(): ?string
    {
        return $this->namw;
    }

    public function setNamw(string $namw): static
    {
        $this->namw = $namw;

        return $this;
    }

    public function getProdutId(): ?Product
    {
        return $this->produt_id;
    }

    public function setProdutId(?Product $produt_id): static
    {
        $this->produt_id = $produt_id;

        return $this;
    }
}
