<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VenueRepository")
 */
class Venue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue("NONE")
     * @ORM\Column(type="string",length=40)
     *
     * @var string
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=200)
     * @Assert\NotBlank()
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string",length=200)
     * @Assert\NotBlank()
     *
     * @var string
     */
    private $address;

    /**
     * @ORM\Column(type="text",nullable=true)
     *
     * @var string
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="city", referencedColumnName="id")
     *
     * @var City
     */
    private $city;

    /**
     * @ORM\Column(type="text",nullable=true)
     *
     * @var string
     */
    private $additionalInformation;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $priority = 10;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->id        = Uuid::uuid4()->toString();
        $this->createdAt = new DateTime();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(City $city)
    {
        $this->city = $city;
    }

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(string $additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
