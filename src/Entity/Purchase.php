<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PurchaseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=PurchaseRepository::class)
 */
class Purchase
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $customer;

    /**
     * @ORM\Column(type="integer")
     */
    private $book;

    /**
     * @ORM\Column(type="date")
     */
    private $purchaseDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomer(): ?int
    {
        return $this->customer;
    }

    public function setCustomer(int $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getBook(): ?int
    {
        return $this->book;
    }

    public function setBook(int $book): self
    {
        $this->book = $book;

        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate(\DateTimeInterface $purchaseDate): self
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }
}
