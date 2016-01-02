<?php

namespace Day2;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Puzzle2Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('day2:puzzle2')
            ->setDescription('Day 2, puzzle 2');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $boxList = file(__DIR__ . '/list.txt');

        $boxCollection = new BoxCollection();

        foreach($boxList as $dimension) {
            $box = new Box($dimension);
            $boxCollection->addBox($box);
        }

        $output->writeln('Answer: ' . $boxCollection->getTotalRibbonLength());
    }
}
