<?php

abstract class Shape {
    protected $color='';
    abstract function calculateArea();
    public function getColor() {
        return $this->color;

    }
}     

class Rectangle extends Shape {
    public $length;
    public $breadth;

    function __construct($color,$length,$breadth){
        $this->color=$color;
        $this->length=$length;
        $this->breadth=$breadth;
    }
   function calculateArea() {
        return $this->length * $this->breadth;

    }
}
class Circle extends Shape {
    public $radius;

    function __construct($color,$radius) {
        $this->color=$color;
        $this->radius=$radius;
    }
    function calculateArea() {
        return $this->radius * 3.14;
    }
}


$rec = new Rectangle("Red", 10,20);
echo $rec->calculateArea() .PHP_EOL;
echo $rec->getColor().PHP_EOL;


$cir= new Circle("Blue", 20);
echo $cir->calculateArea() . PHP_EOL;
echo $cir->getColor().PHP_EOL;