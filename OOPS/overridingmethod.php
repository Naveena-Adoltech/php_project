<?php
class University{
     
    function hello() {
        echo "Say hello from University class" . PHP_EOL , "<br>";
    }
}


class Teacher extends University{
    function hello() {
        echo " Say hello from Teacher class" . PHP_EOL , "<br>";
        parent::hello();
    }
} 
 
$teacher=new Teacher();
$teacher->hello();