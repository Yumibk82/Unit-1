<?php
include_once "Animal.php";
include_once "Edible.php";
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck";
    }

    public function howToEat()
    {
        return " could be fried";
    }
}