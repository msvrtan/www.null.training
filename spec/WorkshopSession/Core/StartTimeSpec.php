<?php

namespace spec\WorkshopSession\Core;

use WorkshopSession\Core\StartTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StartTimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StartTime::class);
    }
}
