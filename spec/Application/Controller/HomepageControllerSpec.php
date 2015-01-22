<?php

namespace spec\Application\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Zend\View\Model\ViewModel;

class HomepageControllerSpec extends ObjectBehavior
{
    function it_should_return_a_viewmodel()
    {
        $this->indexAction()->shouldReturnAnInstanceOf(new ViewModel());
    }
}
