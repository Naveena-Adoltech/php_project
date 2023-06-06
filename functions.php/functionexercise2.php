<?php
declare (strict_types = 1);
function calculator(int $a,int $b , String $operations = "all") {
    $operation = strtolower($operation);

     switch($operation) {
         case 'add':
     $result = $a + $b;
     echo "Add: $result" .PHP_EOL;
     break;
case 'sub':
     $result = $a - $b;
     echo "sub: $result" .PHP_EOL;
     break;
case 'multiply':
     $result= $a * $b;
     echo "mutiply: $result" .PHP_EOL;
     break;
case 'div':
     $result = $a / $b;
     echo "div: $result" .PHP_EOL;
     break;
default:
     $result = $a + $b;
     echo "Add: $result" .PHP_EOL;
     $result = $a - $b;
     echo "sub: $result" .PHP_EOL;
     $result = $a * $b;
     echo "multiply: $result" .PHP_EOL;
     $result = $a / $b;
     echo "div: $result" .PHP_EOL;
     break;


}
}
calculator(1,2);
calculator(1,2,"add");
calculator(1,2,"sub");
calculator(1,2,"multiply");
calculator(1,2,"div");