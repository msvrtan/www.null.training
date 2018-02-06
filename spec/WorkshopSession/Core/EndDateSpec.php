<?php

namespace spec\WorkshopSession\Core;

use WorkshopSession\Core\EndDate;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EndDateSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(EndDate::class);
    }
}
