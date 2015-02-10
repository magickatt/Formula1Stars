<?php

namespace spec\World\Country;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CitySpec extends ObjectBehavior
{
    function it_can_be_given_a_name_which_can_then_be_recalled()
    {
        $this->setName('London');
        $this->getName()->shouldReturn('London');
    }

    function it_can_be_given_coordinates_which_can_then_be_recalled()
    {
        $this->setLongitude(1);
        $this->setLatitude(1);

        $this->getLongitude()->shouldReturn(1);
        $this->getLatitude()->shouldReturn(1);
    }

    function it_cannot_be_given_an_invalid_longitude()
    {
        $this->shouldThrow('\Exception')->duringSetLongitude(181);
        $this->shouldThrow('\Exception')->duringSetLongitude(-181);
    }

    function it_cannot_be_given_an_invalid_latitude()
    {
        $this->shouldThrow('\Exception')->duringSetLatitude(91);
        $this->shouldThrow('\Exception')->duringSetLatitude(-91);
    }
}
