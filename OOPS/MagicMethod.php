<?php
class Student{
    private $id;
    private $name;

    function __set( $name, $value){
        echo "set methods is not found so it is called".PHP_EOL;
    }
echo $name . PHP_EOL;
echo $value.PHP_EOL;
    

    if($name == "id") {
        $this->id=$value;
    }


    function __get($name) {
        echo"Get methods is not found so it is called".PHP_EOL;
    }
    echo $name. PHP_EOL;
    if($name == "id") {
        echo $this->id
}
}

$stu = new Student();
$stu->id = "Test";
echo $stu->id .PHP_EOL;