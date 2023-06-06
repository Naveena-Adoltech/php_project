<?php

declare(strict_types = 1);
function printOddNumbers(int $limit, $skipNumber) {
    for($index=0;$index<=$limit;$index++) {
        if($index==$skipNumber) {
            continue;
        }
        if($index%2 !=0){
            echo "Odd Numbers : $index".PHP_EOL;
        }
    }
}
printOddNumbers(20,"3");
// return value from function
function add($a,$b): int{
    $addition = $a+$b;
    return $a+$b;
}
echo "Return values: " .add(46,23) .PHP_EOL;


function getEvenNumbers($limit): array{
    $returnArr = [];
    for($index=0;$index<=$limit;$index++){
    if($index%2 ==0){
        $returnArr[]= $index;
    }
}
return $returnArr;
}
$evenNumbers = getEvenNumbers(10);
print_r($evenNumbers);

