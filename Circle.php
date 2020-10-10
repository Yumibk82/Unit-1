<?php

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calArea()
    {
        return pi()*pow($this->radius,2);
    }

    public function calPerimeter()
    {
        return pi()*$this->radius*2;
    }
}