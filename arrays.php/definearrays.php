<?php
$arr = [1,"2",3.5];
var_dump($arr);
print_r($arr);

echo $arr[0]. PHP_EOL;
echo $arr[1]. PHP_EOL;
echo $arr[2]. PHP_EOL;
echo $arr[3]. PHP_EOL;

echo "$arr[0]". PHP_EOL;
echo "$arr[1]". PHP_EOL;
echo "$arr[2]". PHP_EOL;
echo "$arr[3]". PHP_EOL;

echo "Array length is:". count($arr) . PHP_EOL;

// FOR EACH LOOP
$arr = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat","Sun"];
var_dump($arr);

$counter=0;
foreach($arr as $values){
    echo "[$counter] => $values" . PHP_EOL;
    $counter++;
}

// converting arrays to integers
var_dump($arr). PHP_EOL;
$arr = 10;
var_dump($arr). PHP_EOL;

$arr = [10];
var_dump($arr);

$arr[10]=[10];
var_dump($arr);


$arr = [];
$arr[0] = 1;
$arr[1] = "String";
$arr[2] = true;

$arr[100]= "New String 1";
$arr[]= "New String 2";
var_dump($arr);

$userdetails = [
"John" => "John@gmail.com",
"Jenny" => "Jenny@gmail.com",
"Joshow" => "Joshow@gmail.com"
];

var_dump($userdetails);
echo $userdetails["John"] . PHP_EOL;
echo $userdetails["Jenny"] . PHP_EOL;
echo $userdetails["Joshow"] . PHP_EOL;

$userdetails["Mary"] = "mary2001@gmail.com";
var_dump($userdetails);


// multi dimensional array
$arr2 = [
    [0,1,2,3,4,5],
    [1,3,4,5],
    [1,6,6]
];
var_dump($arr2);
foreach($arr as $singlearr)
vardump($singlearr);

// unset array
$arr = [1,2,3,4,5];
print_r($arr);

unset($arr[4]);
print_r($arr);