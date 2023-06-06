<?php
 
 class Student {
    public $name = "John Smith";
    public $class = "7th";

    function _construct() {
        $this->name="";
        $this->class="";
        echo "Hello from Constructor" . PHP_EOL;
    }
 function printDetails() {
   
   echo "$this->name is studying in $this->class class" . PHP_EOL;
 }
}

 $student = new Student();
 $student->printDetails(); 
 