<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GrainSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Grain');
    }
}
