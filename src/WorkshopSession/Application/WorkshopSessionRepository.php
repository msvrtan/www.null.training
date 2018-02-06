<?php

declare(strict_types=1);

namespace WorkshopSession\Application;

use Broadway\EventHandling\EventBus;
use Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory;
use Broadway\EventSourcing\EventSourcingRepository;
use Broadway\EventStore\EventStore;
use WorkshopSession\Domain\WorkshopSessionModel;

/**
 * @see \spec\WorkshopSession\Application\WorkshopSessionRepositorySpec
 * @see \Tests\WorkshopSession\Application\WorkshopSessionRepositoryTest
 */
class WorkshopSessionRepository extends EventSourcingRepository
{
    public function __construct(EventStore $eventStore, EventBus $eventBus, array $eventStreamDecorators = [])
    {
        parent::__construct(
            $eventStore,
            $eventBus,
            WorkshopSessionModel::class,
            new PublicConstructorAggregateFactory(),
            $eventStreamDecorators
        );
    }
}
