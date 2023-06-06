<?php
$isloggedin= "true";
$usersessionname= "John Smith";
echo ($isloggedin && $usersessionname) ? "user is logged in" : "user is not logged in";
echo PHP_EOL;
$isloggedin= "true";
$usersessionname= "0";
echo ($isloggedin && $usersessionname) ? "user is logged in" : "user is not logged in";
echo PHP_EOL;
$isloggedin= "true";
$usersessionname= null;
echo ($isloggedin && $usersessionname) ? "user is logged in" : "user is not logged in";
echo PHP_EOL;
$name="John";
echo ($name===John)? "Yes John":" Not John";
echo PHP_EOL;
?>
