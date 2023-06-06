<?php
echo "Current Date" . date("d-m-y h-i-s-a") .PHP_EOL;
echo "Current Date" . date("D-M-Y H-i-s-A") .PHP_EOL;
echo "Current Time in MilliSeconds:" . time().PHP_EOL;
$time = time() + 1000;
echo "Current Date" . date("d-m-y h-i-s-a",$time) .PHP_EOL;

$dateArr=getdate();
//var_dump($dateArr);
foreach($dateArr as $format => $val) {
    echo "$format => $val" . PHP_EOL;
}
echo "Weekday:" . $dateArr["weekday"] . PHP_EOL;
echo "Weekday:" . getdate()["weekday"] . PHP_EOL;
echo "Year:" . getdate()["year"] . PHP_EOL;

echo date_create("now")-> format("y-m-d H:i:s:A") .PHP_EOL;
echo date_create("+1 day")-> format("y-m-d H:i:s:A") .PHP_EOL;
echo date_create("-1 day")-> format("y-m-d H:i:s:A") .PHP_EOL;

$strTime = strtotime("2023-05-30 9:00:00");
echo date("m-d-y h:i:s", $strTime), PHP_EOL;

echo date_default_timezone_get(). PHP_EOL;
echo date("m/d/y h:i:s:a") . PHP_EOL;

date_default_timezone_set("Australia/Melbourne");
echo date("m/d/y h:i:s:a") . PHP_EOL;
echo date_default_timezone_get(). PHP_EOL;


$date1= time();
sleep(10);
$date2= time();
$diff = ($date2 - $date1)/60;
echo $diff;

//date diff
$start = date_create("2023-05-30 12:00:00");
$end = date_create("2023-05-30 13:14:00");
$diff = ($end - $start);
echo $diff;