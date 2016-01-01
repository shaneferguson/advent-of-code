<?php

namespace Day1;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Puzzle2Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('day1:puzzle2')
            ->setDescription('Day 1, puzzle 2');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $elevator = new Elevator();
        $instructionParser = new InstructionParser($elevator);
        $floorObserver = new FloorObserver($instructionParser);

        $elevator->attach($floorObserver);

        $instructions = file_get_contents(__DIR__ . '/instructions.txt');
        $instructionParser->parseInstructions($instructions);

        $output->writeln('Puzzle 2 answer: ' . $floorObserver->getInstructionNumber());
    }
}
