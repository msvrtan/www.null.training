<?php

declare(strict_types=1);

namespace WorkshopSession\Domain\Command;

use DateTime;
use Money\Currency;
use Money\Money;
use WorkshopSession\Core\WorkshopSessionId;

/**
 * @see \spec\WorkshopSession\Domain\Command\CreateWorkshopSessionSpec
 * @see \Tests\WorkshopSession\Domain\Command\CreateWorkshopSessionTest
 */
class CreateWorkshopSession
{
    /** @var WorkshopSessionId */
    private $id;

    /** @var int */
    private $workshopId;

    /** @var string */
    private $venueId;

    /** @var DateTime */
    private $startDate;

    /** @var DateTime */
    private $endDate;

    /** @var DateTime */
    private $startTime;

    /** @var DateTime */
    private $endTime;

    /** @var string */
    private $language;

    /** @var Money */
    private $price;

    public function __construct(
        WorkshopSessionId $id,
        int $workshopId,
        string $venueId,
        DateTime $startDate,
        DateTime $endDate,
        DateTime $startTime,
        DateTime $endTime,
        string $language,
        Money $price
    ) {
        $this->id         = $id;
        $this->workshopId = $workshopId;
        $this->venueId    = $venueId;
        $this->startDate  = $startDate;
        $this->endDate    = $endDate;
        $this->startTime  = $startTime;
        $this->endTime    = $endTime;
        $this->language   = $language;
        $this->price      = $price;
    }

    public function getId(): WorkshopSessionId
    {
        return $this->id;
    }

    public function getWorkshopId(): int
    {
        return $this->workshopId;
    }

    public function getVenueId(): string
    {
        return $this->venueId;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    public function getStartTime(): DateTime
    {
        return $this->startTime;
    }

    public function getEndTime(): DateTime
    {
        return $this->endTime;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function serialize(): array
    {
        return [
            'id'         => $this->id->serialize(),
            'workshopId' => $this->workshopId,
            'venueId'    => $this->venueId,
            'startDate'  => $this->startDate->format('c'),
            'endDate'    => $this->endDate->format('c'),
            'startTime'  => $this->startTime->format('c'),
            'endTime'    => $this->endTime->format('c'),
            'language'   => $this->language,
            'price'      => [
                'amount'   => $this->price->getAmount(),
                'currency' => $this->price->getCurrency()->getCode(),
            ],
        ];
    }

    public static function deserialize(array $data): self
    {
        return new self(
            WorkshopSessionId::deserialize($data['id']),
            $data['workshopId'],
            $data['venueId'],
            new DateTime($data['startDate']),
            new DateTime($data['endDate']),
            new DateTime($data['startTime']),
            new DateTime($data['endTime']),
            $data['language'],
            new Money($data['price']['amount'], new Currency($data['price']['currency']))
        );
    }
}
