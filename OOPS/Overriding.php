<?php
class Database{
    public function getConnection(){
        echo "Default it is connected to MySql" . PHP_EOL;
    }
}
class OracleDatabase extends Database{
    public function getConnection() {
        echo "It is connected to oracle" . PHP_EOL;
    }
}
$db1=new Database();
$db2=new OracleDatabase();

$db1->getConnection();
$db2->getConnection();