<?php


class Cylinder extends Circle
{   public $height;

    public function __construct($name,$radius,$height){
        parent::__construct($name,  $radius);
        $this->height =$height;
    }

    public function calArea()
    {
        return 2*parent::calArea()+parent::calPerimeter()*$this->height;
    }

    public function calVolume()
    {
        return parent::calArea()*$this->height;
    }
}