<?php
include ("Thuc_hanh.php");
?>

<?php

$rec1 = new Rectangle(10,20);

echo $rec1->width;//10
echo $rec1->height;//20

$rec1->width=30;
$rec1->height=20;

echo $rec1->width;//30
echo $rec1->height;//20
echo $rec1->getArea();//600
echo $rec1->getPerimeter();//100
echo "your rectangle is ".$rec1->display();
?>
