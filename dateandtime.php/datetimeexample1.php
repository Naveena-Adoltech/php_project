<?php
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