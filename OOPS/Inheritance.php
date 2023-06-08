<?php
 class University{
    protected $UniversityName = "Boston University";
    function helloUniversity() {
        echo" Hello from $this->UniversityName".PHP_EOL;

    }
 }
 class Teacher extends University{
    public $teacherName="Jane";
    function helloTeacher() {
        echo "Hello from $this->teacherName".PHP_EOL;
    }

    function getUniversityName() {
        return $this->universityName;
    }
 }
 $teacher1=new teacher();
 $teacher1->helloTeacher();
 $teacher1->helloUniversity();//using the child class object to call the parent class method
 