<?php

namespace Day1;

use SplObserver;
use SplSubject;

class FloorObserver implements SplObserver
{

    /**
     * @var InstructionParser
     */
    private $instructionParser;
    private $instructionNumber;

    public function __construct(InstructionParser $instructionParser)
    {
        $this->instructionParser = $instructionParser;
    }

    /**
     * Receive update from subject
     *
     * @link http://php.net/manual/en/splobserver.update.php
     *
     * @param SplSubject $elevator
     *
     * @internal param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     *
     * @since 5.1.0
     */
    public function update(SplSubject $elevator)
    {
        if( ! $elevator instanceof Elevator) {
            return;
        }
        if(empty($this->instructionNumber) && $elevator->getFloor() == -1) {
            $this->instructionNumber = $this->instructionParser->getInstructionCount();
        }
    }

    public function getInstructionNumber()
    {
        return $this->instructionNumber;
    }
}
