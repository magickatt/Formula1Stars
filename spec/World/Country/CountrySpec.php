<?php

namespace spec\World\Country;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountrySpec extends ObjectBehavior
{
    function let()
    {

    }

    function it_can_be_given_a_name_which_can_then_be_recalled()
    {
        $this->setName('England');
        $this->getName()->shouldReturn('England');
    }
}
