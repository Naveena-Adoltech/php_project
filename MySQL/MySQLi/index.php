<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content="width=device-width,initial-scale=1.0">
    <meta name = "Description" content="Page Description">
     <title>MySQLi</title>
    </head>
   <body>
    <h1> MYSQLi - Connection </h1>
   <?php
    $hostname='localhost';
    $dbname='schooldb';
    $username ='root';
    $password="";

    try{
        $db=new mysqli($hostname,$username,$password,$dbname);

        //check connection
        if($db->connect_error)
           die("Connection Failed! .$db->connect_error");

         // close connection
         $db->close();  

      }catch(Exception $e){
        $error_message= $e->getMessage();
        echo "<p> Error Message: $error_message</p>";
    }
    ?>
     </body>
     </html>