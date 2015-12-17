<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Day1\Puzzle1Command;

$application = new Application();
$application->add(new Puzzle1Command());
$application->run();