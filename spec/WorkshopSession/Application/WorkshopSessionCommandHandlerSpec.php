<?php

declare(strict_types=1);

namespace spec\WorkshopSession\Application;

use Broadway\CommandHandling\SimpleCommandHandler;
use PhpSpec\ObjectBehavior;
use WorkshopSession\Application\WorkshopSessionCommandHandler;
use WorkshopSession\Application\WorkshopSessionRepository;

class WorkshopSessionCommandHandlerSpec extends ObjectBehavior
{
    public function let(WorkshopSessionRepository $repository)
    {
        $this->beConstructedWith($repository);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(WorkshopSessionCommandHandler::class);
        $this->shouldHaveType(SimpleCommandHandler::class);
    }
}
