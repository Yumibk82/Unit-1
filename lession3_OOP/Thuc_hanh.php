<?php
class Rectangle {
    public $width;
    public $height;
    function __construct($width,$height){
        $this->width= $width;
        $this->height= $height;

    }
    public function getArea(){
        return $this->width * $this->height;
    }
    public function getPerimeter(){
        return ($this->height+$this->width)*2;
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}

?>
