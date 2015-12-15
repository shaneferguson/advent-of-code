<?php

namespace spec\Day1;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ElevatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Day1\Elevator');
    }

    function it_should_start_at_zero()
    {
    	$this->getFloor()->shouldBe(0);
    }

    function it_can_go_up()
    {
    	$this->goUp();
    	$this->getFloor()->shouldBe(1);
    }

    function it_can_go_down()
    {
    	$this->goDown();
    	$this->getFloor()->shouldBe(-1);
    }
}
