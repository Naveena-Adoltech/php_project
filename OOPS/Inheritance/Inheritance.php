<?php
 
 declare(strict_types=1);

 require_once "University.php";
 require_once "Teacher.php";

 $university1= new University("Boston1 University","Europe1","ABC123");
 $university2= new University("Boston2 University","Europe2","ABC456");

 $teacher1=new Teacher("Shah",45,"biology",$university1);
 $teacher2=new Teacher("John",25,"physics",$university2);

 $teacher1->printTeacherDetails();
 $teacher1->printUniversityDetails();
 echo "---------------------------------".PHP_EOL;
 $teacher2->printTeacherDetails();
 $teacher2->printUniversityDetails();
