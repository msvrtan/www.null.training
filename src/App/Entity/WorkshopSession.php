<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Money\Currency;
use Money\Money;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WorkshopSessionRepository")
 */
class WorkshopSession
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
     * @ORM\ManyToOne(targetEntity="Workshop")
     * @ORM\JoinColumn(name="workshop", referencedColumnName="id")
     * @Assert\NotBlank()
     *
     * @var Workshop
     */
    private $workshop;

    /**
     * @ORM\ManyToOne(targetEntity="Venue")
     * @ORM\JoinColumn(name="venue", referencedColumnName="id")
     * @Assert\NotBlank()
     *
     * @var Venue
     */
    private $venue;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="city", referencedColumnName="id")
     *
     * @var City
     */
    private $city;

    /**
     * @ORM\Column(type="date")
     *
     * @var DateTime
     */
    private $startDate;

    /**
     * @ORM\Column(type="date")
     *
     * @var DateTime
     */
    private $endDate;

    /**
     * @ORM\Column(type="time")
     *
     * @var DateTime
     */
    private $startTime;

    /**
     * @ORM\Column(type="time")
     *
     * @var DateTime
     */
    private $endTime;

    /**
     * @ORM\Column(type="string",length=5)
     *
     * @var string
     */
    private $language;

    /**
     * @ORM\Column(type="integer",nullable=true)
     *
     * @var int|null
     */
    private $priceAmount;

    /**
     * @ORM\Column(type="string",length=5)
     *
     * @var string
     */
    private $priceCurrency;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->id        = Uuid::uuid4()->toString();
        $this->startDate = new DateTime('today');
        $this->endDate   = new DateTime('tomorrow');
        $this->startTime = new DateTime('today 9:00');
        $this->endTime   = new DateTime('tomorrow 17:00');
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

    public function getWorkshop(): ?Workshop
    {
        return $this->workshop;
    }

    public function setWorkshop(Workshop $workshop)
    {
        $this->workshop = $workshop;
    }

    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    public function setVenue(Venue $venue)
    {
        $this->venue = $venue;
        $this->city  = $venue->getCity();
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    public function getStartTime(): ?DateTime
    {
        return $this->startTime;
    }

    public function setStartTime(DateTime $startTime)
    {
        $this->startTime = $startTime;
    }

    public function getEndTime(): ?DateTime
    {
        return $this->endTime;
    }

    public function setEndTime(DateTime $endTime)
    {
        $this->endTime = $endTime;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    public function getPrice(): ?Money
    {
        if (null === $this->priceAmount) {
            return null;
        }

        return new Money($this->priceAmount, new Currency($this->priceCurrency));
    }

    public function getPriceAmount(): ?int
    {
        return $this->priceAmount;
    }

    public function setPriceAmount(?int $priceAmount)
    {
        $this->priceAmount = $priceAmount;
    }

    public function getPriceCurrency(): ?string
    {
        return $this->priceCurrency;
    }

    public function setPriceCurrency(string $priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function __toString(): string
    {
        return $this->workshop->getTitle($this->language);
    }
}
