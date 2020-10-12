<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle1= new Circle("3","red");
echo "Color of Circle is" .$circle1->getColor(). "and area is ". $circle1->calArea();
//echo new Circle();
$cylinder1 =new Cylinder("4","blue","5");
echo "Color of Cylinder is ".$cylinder1->getColor().", area is ".$cylinder1->calArea()."and".$cylinder1->calVolume();
//echo new Cylinder();