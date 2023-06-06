<?php
class Student {
    private $id;
    private $name;
    private $class;

public function setId ($id) {
    $this->id=$id;
}
public function getId()  {
    return $this->id;
}
public function setName ($name) {
    $this->name=$name;
}
public function getName() {
    return $this->name;
}
public function setClass ($class) {
    $this->class=$class;
}
public function getClass()  {
    return $this->class;
}

}
$student1=new Student();
$student1->setId("This is a Student ID") ;
echo $student1->getId() . PHP_EOL;
$student1->setName("This is a Student Name") ;
echo $student1->getName() . PHP_EOL;
$student1->setClass("This is a Student class") ;
echo $student1->getClass() . PHP_EOL;

