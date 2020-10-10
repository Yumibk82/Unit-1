<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";


    $circle = new Circle("Circle 1","3");
    echo "Circle area is: ". $circle->calArea()."<br>";
    echo "Circle perimeter is: ".$circle->calPerimeter()."<br>";


    $cylinder= new Cylinder("cylinder 1","3","4");
    echo "Cylinder area is: ".$cylinder->calArea()."<br>";
    echo "Cylinder volume is: ".$cylinder->calVolume()."<br>";


    $rectangle = new Rectangle("rectangle1","3","4");
    echo "Rectangle area is: ".$rectangle->calArea()."<br>";
    echo "Rectangle perimeter is: ".$rectangle->calPerimeter()."<br>";

    $square = new Square("square1","3");
    echo "Square are is: ".$square->calArea()."<br>";
    echo "Square perimeter is: ".$square->calPerimeter()."<br>";