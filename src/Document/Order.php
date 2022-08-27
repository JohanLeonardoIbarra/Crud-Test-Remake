<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

#[ODM\Document]
class Order
{
    #[ODM\Id]
    private string $id;
    #[ODM\Field(type: "string", nullable: false)]
    #[Assert\NotNull]
    #[Assert\NotBlank]
    private string $productName;
    #[ODM\Field(type: "int", nullable: false)]
    #[Assert\Positive]
    private int $userId;
    #[ODM\Field(type: "int", nullable: false)]
    #[Assert\Positive]
    private int $quantity;
    #[ODM\Field(type: "float", nullable: false)]
    #[Assert\PositiveOrZero]
    private float $unitPrice;

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return Order
     */
    public function setProductName(string $productName): static
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return Order
     */
    public function setUserId(int $userId): static
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Order
     */
    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     * @return Order
     */
    public function setUnitPrice(float $unitPrice): static
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}