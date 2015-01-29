<?php

namespace spec\Driver\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DriverSpec extends ObjectBehavior
{
    function it_can_create_a_model_from_a_blank_entity(\Driver\Entity\Driver $entity)
    {
        $this->create($entity)->shouldReturnAnInstanceOf(new \Driver\Model\Driver());
    }
}
