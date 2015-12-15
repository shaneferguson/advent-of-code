<?php

namespace Day1;

class Elevator
{
	protected $floor = 0;

    public function getFloor()
    {
        return $this->floor;
    }

    public function goUp()
    {
        $this->floor++;
    }

    public function goDown()
    {
        $this->floor--;
    }
}
