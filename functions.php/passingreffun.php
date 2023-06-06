<?php
$result=0;
function add($a,$b,$result=null) : int{
    $addition= $a + $b;
    return $addition;
}
echo $result . PHP_EOL;
$result = add(5,6);
echo $result .PHP_EOL;

//passing variable to reference

$result=0;
function add($a,$b, &$result = null) {
    $result= $a + $b;
   
}
echo $result . PHP_EOL;
add(5,6,$result);
echo $result .PHP_EOL;
