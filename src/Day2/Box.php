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

    public function getRibbonLength()
    {
        $perimeters = [
            $this->getLidPerimeter(),
            $this->getSidePerimeter(),
            $this->getFacePerimeter()
        ];

        $total = min($perimeters) + $this->getVolume();

        return $total;
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

    private function getLidArea()
    {
        return $this->width * $this->length;
    }

    private function getSideArea()
    {
        return $this->height * $this->length;
    }

    private function getFaceArea()
    {
        return $this->width * $this->height;
    }

    private function getVolume()
    {
        return $this->width * $this->height * $this->length;
    }

    private function getLidPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    private function getSidePerimeter()
    {
        return 2 * ($this->height + $this->length);
    }

    private function getFacePerimeter()
    {
        return 2 * ($this->width + $this->length);
    }
}
