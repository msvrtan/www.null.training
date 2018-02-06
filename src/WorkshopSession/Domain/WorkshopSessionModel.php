<?php

declare(strict_types=1);

namespace WorkshopSession\Domain;

use Broadway\EventSourcing\EventSourcedAggregateRoot;
use DateTime;
use Money\Money;
use WorkshopSession\Core\WorkshopSessionId;
use WorkshopSession\Domain\Event\WorkshopSessionCreated;

/**
 * @see \spec\WorkshopSession\Domain\WorkshopSessionModelSpec
 * @see \Tests\WorkshopSession\Domain\WorkshopSessionModelTest
 */
class WorkshopSessionModel extends EventSourcedAggregateRoot
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

    /** @var DateTime */
    private $createdAt;

    public static function create(
        WorkshopSessionId $id,
        int $workshopId,
        string $venueId,
        DateTime $startDate,
        DateTime $endDate,
        DateTime $startTime,
        DateTime $endTime,
        string $language,
        Money $price
    ): self {
        $model = new self();

        $model->apply(
            WorkshopSessionCreated::create($id, $workshopId, $venueId, $startDate, $endDate, $startTime, $endTime, $language, $price)
        );

        return $model;
    }

    public function applyWorkshopSessionCreated(WorkshopSessionCreated $created)
    {
        $this->id         = $created->getId();
        $this->workshopId = $created->getWorkshopId();
        $this->venueId    = $created->getVenueId();
        $this->startDate  = $created->getStartTime();
        $this->endDate    = $created->getEndDate();
        $this->startTime  = $created->getStartTime();
        $this->endTime    = $created->getEndTime();
        $this->language   = $created->getLanguage();
        $this->price      = $created->getPrice();
        $this->createdAt  = $created->getCreatedAt();
    }

    public function getAggregateRootId(): string
    {
        return $this->id->__toString();
    }
}
