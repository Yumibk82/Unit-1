<?php
include "Chicken.php";
include "Tiger.php";

echo "Animal: ";
$animals[0]= new Tiger();
$animals[1]=new Chicken();

foreach($animals as $animal){
    echo $animal->makeSound().' ';
    if($animal instanceof Chicken){
        echo $animal->howToEat().' ';
    }
}
echo 'Fruits ';
$fruits[0] = new Apple();
$fruits[1] = new Orange();
foreach ($fruits as $fruit){
    echo $fruit->howToEat();
}