<?php


class TwoDimension
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x =$x;
        $this->y=$y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

}