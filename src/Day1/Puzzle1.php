<?php

namespace Day1;

class Puzzle1
{
    public function __invoke()
    {
        $instructions = file_get_contents(__DIR__ . '/instructions.txt');

        $elevator = new Elevator();
        $instructionParser = new InstructionParser($elevator);

        $instructionParser->parseInstructions($instructions);

        echo 'Puzzle 1 answer: ' . $elevator->getFloor();
    }
}
