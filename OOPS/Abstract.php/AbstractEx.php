<?php

abstract class Car{
    abstract public function applyBreak();

    public function increaseSpeed() {
        echo "Increasing the speed" . PHP_EOL ,"<br>";
    }

    public function decreaseSpeed() {
        echo "Decreasing the speed" . PHP_EOL , "<br>";
 
    }
}
class SportsCar extends Car{
    function applyBreak(){

    }
}

$car1= new SportsCar();
$car1->applyBreak();
$car1->increaseSpeed();
$car1->decreaseSpeed();
$car1->applyingBreak();