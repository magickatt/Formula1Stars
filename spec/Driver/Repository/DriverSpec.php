<?php

namespace spec\Driver\Repository;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DriverSpec extends ObjectBehavior
{
    function let(\Zend\Db\TableGateway\TableGatewayInterface $tableGateway, \Driver\Factory\Driver $factory)
    {
        $this->beConstructedWith($tableGateway, $factory);
    }
}
