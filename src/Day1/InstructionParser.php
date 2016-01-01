<?php

namespace Day1;

class InstructionParser
{
    /**
     * @var Elevator
     */
    private $elevator;

    private $instructionCount = 0;

    /**
     * InstructionParser constructor.
     *
     * @param Elevator $elevator
     */
    public function __construct(Elevator $elevator)
    {
        $this->elevator = $elevator;
    }

    public function parseInstructions($instructions)
    {
        foreach(str_split($instructions) as $instruction) {
            if ($instruction == '(') {
                $this->instructionCount++;
                $this->elevator->goUp();
            } elseif ($instruction == ')') {
                $this->instructionCount++;
                $this->elevator->goDown();
            }
        }
    }

    public function getInstructionCount()
    {
        return $this->instructionCount;
    }
}
