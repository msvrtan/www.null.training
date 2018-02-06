<?php

namespace spec\WorkshopSession\Core;

use WorkshopSession\Core\EndTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EndTimeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(EndTime::class);
    }
}
