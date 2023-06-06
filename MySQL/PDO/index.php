<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content="width=device-width,initial-scale=1.0">
    <meta name = "Description" content="Page Description">
     <title>MySQL PDO</title>
    </head>
   <body>
    <h1> PDO - Connection </h1>
   <?php
    $dns = "mysql:host=localhost;dbname=schooldb";
    $username ='root';
    $password="";

    try{
        $db=new PDO($dns,$username,$password);

      }catch(Exception $e){
        $error_message= $e->getMessage();
        echo "<p> Error Message: $error_message</p>";
    }
    ?>
     </body>
     </html>