<?php

namespace spec\Driver\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IndexControllerSpec extends ObjectBehavior
{
    function let(\Driver\Repository\Driver $repository)
    {
        $this->beConstructedWith($repository);
    }

    function it_should_return_a_viewmodel()
    {
        $this->indexAction()->shouldReturnAnInstanceOf(new \Zend\View\Model\ViewModel());
    }
}
