<?php
 
 require_once "Car.php";

 class SportsCar implements Car{

    public function applyBreak() {
        echo "Applying break".PHP_EOL ,"<br>"; 
    }

    public function increaseSpeed() {
        echo "Increasing Speed".PHP_EOL , "<br>";
    }
    public function decreaseSpeed() {
        echo "Decreasing Speed".PHP_EOL ,"<br>";
    }    
    }    
    


 