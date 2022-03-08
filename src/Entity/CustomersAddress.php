<?php

namespace App\Entity;

use App\Repository\CustomersAddressRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomersAddressRepository::class)
 */
class CustomersAddress
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $postBox;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity=Customers::class, inversedBy="customersAddresses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $customerCode;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $socialReason;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $callName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostBox(): ?string
    {
        return $this->postBox;
    }

    public function setPostBox(?string $postBox): self
    {
        $this->postBox = $postBox;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zipCode;
    }

    public function setZipCode(int $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCustomerCode(): ?Customers
    {
        return $this->customerCode;
    }

    public function setCustomerCode(?Customers $customerCode): self
    {
        $this->customerCode = $customerCode;

        return $this;
    }

    public function getSocialReason(): ?string
    {
        return $this->socialReason;
    }

    public function setSocialReason(?string $socialReason): self
    {
        $this->socialReason = $socialReason;

        return $this;
    }

    public function getCallName(): ?string
    {
        return $this->callName;
    }

    public function setCallName(?string $callName): self
    {
        $this->callName = $callName;

        return $this;
    }
}
