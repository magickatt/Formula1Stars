<?php

namespace spec\Driver\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Driver\Entity\Driver as DriverEntity;

class DriverSpec extends ObjectBehavior
{
    function let(DriverEntity $driverEntity)
    {
        $this->beConstructedWith($driverEntity);
    }
}
