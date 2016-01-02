<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new Day1\Puzzle1Command());
$application->add(new Day1\Puzzle2Command());
$application->add(new Day2\Puzzle1Command());
$application->add(new Day2\Puzzle2Command());
$application->run();