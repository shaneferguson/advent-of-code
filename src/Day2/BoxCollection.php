<?php

namespace Day2;

class BoxCollection
{

    private $boxes;

    public function addBox(BoxInterface $box)
    {
        $this->boxes[] = $box;
    }

    public function getBoxes()
    {
        return $this->boxes;
    }

    /**
     *
     */
    public function getTotalWrappingArea()
    {
        $totalArea = 0;

        /** @var BoxInterface $box */
        foreach ($this->boxes as $box) {
            $totalArea += $box->getWrappingPaperArea();
        }

        return $totalArea;
    }
}
