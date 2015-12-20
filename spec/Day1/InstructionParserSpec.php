<?php

namespace spec\Day1;

use Day1\Elevator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InstructionParserSpec extends ObjectBehavior
{
    function let(Elevator $elevator)
    {
        $this->beConstructedWith($elevator);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Day1\InstructionParser');
    }

    function it_goes_up_with_open_parenthesis(Elevator $elevator)
    {
        $this->parseInstructions('(');
        $elevator->goUp()->shouldHaveBeenCalled();
    }

    function it_goes_down_with_closed_parenthesis(Elevator $elevator)
    {
        $this->parseInstructions(')');
        $elevator->goDown()->shouldHaveBeenCalled();
    }

    function it_parses_multiple_instructions(Elevator $elevator)
    {
        $this->parseInstructions(')()))(');
        $elevator->goUp()->shouldHaveBeenCalledTimes(2);
        $elevator->goDown()->shouldHaveBeenCalledTimes(4);
    }

    function it_starts_at_instruction_zero(Elevator $elevator)
    {
        $this->instructionCount()->shouldBe(0);
    }

}
