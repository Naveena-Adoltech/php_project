<?php
class Doctor{
    function calculateFees($hours){
        return 10 * hours;
    }
}
class Specialist extends Doctor{
    function calculateFees($hours) {
        return 25 * hours;
}
}
$dc1=new Doctor();
echo $dc1->calculateFees(4) . PHP_EOL;

$sp1=new Specialist();
 echo $sp2->calculateFees(8) . PHP_EOL;