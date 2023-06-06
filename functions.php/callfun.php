<?php
function PrintEvenNumbers($limit) {
 for($index=0;$index<=$limit;$index++) {
 if($index%2 ==0) {
 echo "Even Numbers:$index".PHP_EOL;
 }
}
}
PrintEvenNumbers(20);
PrintEvenNumbers("20");//not to be used

function add($a,$b) {
    return($a+$b);

}

echo add(10,20).PHP_EOL;