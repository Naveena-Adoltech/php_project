<?php
function sub($a,$b): int{
    return $a-$b;
}
$addFunction="sub";
echo "Result is: ". $addFunction(4,6). PHP_EOL , "<br>";

//anonymous function

$addNumbers = function($a,$b) : int{
    $addition = $a + $b;
    return $addition;
};
echo $addNumbers(1,2) .PHP_EOL,"<br>";

//access content inside occlusion

$content = " This is a String message";
$printContent = function() use ($content) {
    echo $content;

};
$printContent();