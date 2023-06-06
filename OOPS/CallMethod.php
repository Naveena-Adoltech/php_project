<?php
class Student{
    function __call($name,$arguments) {
        echo $name.PHP_EOL;
        echo $arguments.PHP_EOL;
    }
}
$stu1=new Student();
$stu1->create_posts("This is a link");