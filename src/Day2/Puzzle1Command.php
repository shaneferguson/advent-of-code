<?php

namespace Day2;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Puzzle1Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('day2:puzzle1')
            ->setDescription('Day 2, puzzle 1');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $list = file_get_contents(__DIR__ . '/list.txt');

        $boxCollection = new BoxCollection();

        $dimensions = explode(PHP_EOL, $list);
        foreach($dimensions as $dimension) {
            $box = new Box($dimension);
            $boxCollection->addBox($box);
        }

        $output->writeln('Answer: ' . $boxCollection->getTotalWrappingArea());
    }
}
