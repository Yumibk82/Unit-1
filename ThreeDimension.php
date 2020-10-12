<?php

include_once "TwoDimension.php";
class ThreeDimension extends TwoDimension
{
    public $z;

    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z= $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function __toString()
    {
        return  "(".$this->x.",".$this->y.",".$this->z.")";
}
}
