<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function __toString()
    {
        return "return phuong thuc toString";
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function calArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function CalPerimeter()
    {
        return $this->radius * pi() * 2;
    }
}