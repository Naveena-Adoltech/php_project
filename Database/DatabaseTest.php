<?php

require_once("Database.php");

$db =  new Database();
echo $db->isConnected() ? "DB connected" . PHP_EOL : "DB is not Connected" .PHP_EOL;

if(!$db->isConnected()) {
    echo $db->geterror;
    die('Unable to Connect to DB');
}

$db->query("SELECT * FROM tbl_oop_test ");
var_dump($db->resultset());
echo "Rows:" . $db->rowCount();
var_dump($db->single());

$db->query("SELECT * FROM tbl_oop_test where id = :id");
$db->bind(':id',1);
var_dump($db->single());


