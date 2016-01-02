<?php

namespace Day2;

class Box implements BoxInterface
{
    private $height;
    private $width;
    private $length;

    public function __construct($dimensions)
    {
        preg_match('/(\d+)x(\d+)x(\d+)/', $dimensions, $matches);
        $this->height = (int) $matches[1];
        $this->width = (int) $matches[2];
        $this->length = (int) $matches[3];
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    public function getLidArea()
    {
        return $this->width * $this->length;
    }

    public function getSideArea()
    {
        return $this->height * $this->length;
    }

    public function getFaceArea()
    {
        return $this->width * $this->height;
    }

    public function getWrappingPaperArea()
    {
        $areas = [
            $this->getLidArea(),
            $this->getSideArea(),
            $this->getFaceArea()
        ];

        $surfaceArea = 2 * array_sum($areas) + min($areas);

        return $surfaceArea;
    }

}
