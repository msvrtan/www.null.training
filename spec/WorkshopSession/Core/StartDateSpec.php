<?php

namespace spec\WorkshopSession\Core;

use WorkshopSession\Core\StartDate;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StartDateSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StartDate::class);
    }
}
