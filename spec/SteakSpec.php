<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SteakSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Steak');
    }

    function it_should_be_food()
    {
        $this->shouldBeAnInstanceOf('Food');
    }
}
