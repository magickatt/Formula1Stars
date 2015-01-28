<?php

namespace spec\Driver\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DriverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Driver\Entity\Driver');
    }
}
