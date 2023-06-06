<?php
 //initialising properties with constructor
 class Student {
    public $name ;
    public $class ;

    function _construct($name = "", $class="") {
        $this->name= $name;
        $this->class=$class;
    }
 function printDetails() {
   
   echo "$this->name is studying in $this->class class" . PHP_EOL;
 }
}

 $student = new Student();
 $student->name="John Smith";
 $student->class="9th";
 $student->printDetails(); 

//best recommended way to use
 $student = new Student("John Smith","9th");
$student->printDetails();
 