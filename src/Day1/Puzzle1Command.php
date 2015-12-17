<?php

namespace Day1;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Puzzle1Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('day1:puzzle1')
            ->setDescription('Day 1, puzzle 1');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $instructions = file_get_contents(__DIR__ . '/instructions.txt');

        $elevator = new Elevator();
        $instructionParser = new InstructionParser($elevator);

        $instructionParser->parseInstructions($instructions);

        $output->writeln('Puzzle 1 answer: ' . $elevator->getFloor());
    }
}
