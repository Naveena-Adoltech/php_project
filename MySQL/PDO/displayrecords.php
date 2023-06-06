<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content="width=device-width,initial-scale=1.0">
    <meta name = "Description" content="Page Description">
     <title>MySQL PDO</title>
    </head>
   <body>
    <h1> PDO - Check Connection </h1>
    <?php
    $query="SELECT * FROM student;";
    $dns = "mysql:host=localhost;dbname=schooldb";
    $username ='root';
    $password="";

    try{
        $db=new PDO($dns,$username,$password);

        // prepared statement
        $statement = $db-> prepare($query);

        // execute query
        $statement ->execute();

        //loop the records
        while($student= $statement->fetch()) {
                echo "ID:".$student['ID']."<br>";
                echo "NAME:".$student['NAME']."<br>";
               
        }

        // close statement
        $statement-> closeCursor();

    }catch(Exception $e){
        $error_message= $e->getMessage();
        echo "<p> Error Message: $error_message</p>";
    }
    ?>
    </body>
    </html>
    
    