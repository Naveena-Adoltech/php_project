<?php
class Database{

    // defining variable
    public $dbConnection;
    public $records;

    //function used to open connection with database

    function openConnection() : bool {}
    function fetchRecords($id) : array {}
    function insertRecords($data) : bool {}
    function updateRecords($id) : bool {}
    function deleteRecords($id) : bool {} 
}