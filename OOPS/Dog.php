<?php
class Dog{
    private $color;
    private $breed;

    function getColor() : string {
        return $this->color;
    }

    function setColor($color) {
         $this->color=$color;
    }
    function getBreed() : string {
        return $this->breed;

    }
    function setBreed($breed) {
        $this->breed=$breed;
    }
    function dogBark() {
        echo "Woof! Woof!".PHP_EOL;
    }
    
     function dogSleep() {
        echo "ZZZZZZZZZzzzzzzz" . PHP_EOL;
     }  
     
     //function printDogDetails() {
        //echo "My Dog is $this->color in color and its breed is $this->breed" . PHP_EOL;
     }
    

     $dog1=new Dog();

     $dog1->setColor("Black");
     $dog1->setBreed("German Shepherd");
     
     $dog1->dogBark();
     $dog1->dogSleep();
     //$dog1->printDogDetails();
 