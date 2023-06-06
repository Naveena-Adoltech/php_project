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
        $query = "INSERT INTO student(ID,NAM) VALUES (:ID, :NAM)";
        $dns = "mysql:host=localhost;dbname=schooldb";
        $username ='root';
        $password="";

    try{
        $db=new PDO($dns,$username,$password);

        // prepared statement
        $statement = $db-> prepare($query);

        $statement->bindValue(':ID',3,PDO::PARAM_INT);
        $statement->bindValue(':NAM','JOGAN',PDO::PARAM_STR);
        

        // execute query
        if($statement->execute()) {
            echo "record inserted Successfully";
        }else{
            echo "No records inserted";
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