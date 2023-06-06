<?php
$result=0;
function add($a,$b, &$result = null) {
    $result= $a + $b;
   
}
echo $result . PHP_EOL;
add(5,6,$result);
echo $result .PHP_EOL;