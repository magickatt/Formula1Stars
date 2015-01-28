<?php

namespace spec\Driver\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IndexControllerSpec extends ObjectBehavior
{
    function it_should_return_a_viewmodel()
    {
        $this->indexAction()->shouldReturnAnInstanceOf(new \Zend\View\Model\ViewModel());
    }
}
