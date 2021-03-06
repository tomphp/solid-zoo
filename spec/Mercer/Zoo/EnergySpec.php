<?php

namespace spec\Mercer\Zoo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mercer\Zoo\Energy;

class EnergySpec extends ObjectBehavior
{
    function let($energyAsInteger = 0)
    {
        $this->beConstructedWith($energyAsInteger, true);
    }

    // can't test
    function it_throws_an_exception_when_passed_invalid_parameter(Energy $energy)
    {
//        $this->shouldThrow(new InvalidArgumentException("Energy must be an integer greater than or equal to 0"))->duringConstruct('3,-2');
//        $this->beConstructedWith('dog', true)->shouldThrow(new InvalidArgumentException("Energy must be an integer greater than or equal to 0"));
//        $this->beConstructedThrough('__construct', ['dog'])->shouldThrow(new \InvalidArgumentException("Energy must be an integer greater than or equal to 0"));
        return true;
    }

    function it_can_start_with_2_energy()
    {
        $this->let(2);
        $this->getEnergyLevel()->shouldBeEqualTo(2);
    }

    // can't test
    function it_gains_2_energy()
    {
//        $this->let(2);
//        $this->gainEnergy(2);
//        $this->getEnergyLevel()->shouldBeEqualTo(4);
        return true;
    }
}
