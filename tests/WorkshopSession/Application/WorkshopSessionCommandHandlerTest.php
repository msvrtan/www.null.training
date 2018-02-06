<?php

declare(strict_types=1);

namespace Tests\WorkshopSession\Application;

use PHPUnit\Framework\TestCase;
use WorkshopSession\Application\WorkshopSessionCommandHandler;
use WorkshopSession\Application\WorkshopSessionRepository;

/**
 * @covers \WorkshopSession\Application\WorkshopSessionCommandHandler
 * @group  todo
 */
class WorkshopSessionCommandHandlerTest extends TestCase
{
    /** @var WorkshopSessionRepository */
    private $repository;

    /** @var WorkshopSessionCommandHandler */
    private $sut;

    public function setUp()
    {
        $this->repository = new WorkshopSessionRepository(
            \Mockery::mock('Broadway\EventStore\EventStore'),
            \Mockery::mock('Broadway\EventHandling\EventBus'),
            ['data']
        );
        $this->sut = new WorkshopSessionCommandHandler($this->repository);
    }
}
