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
        $query = "UPDATE student SET NAM=:NAM WHERE ID=:ID";
        $dns = "mysql:host=localhost;dbname=schooldb";
        $username ='root';
        $password="";

    try{
        $db=new PDO($dns,$username,$password);

        // prepared statement
        $statement = $db-> prepare($query);

        $statement->bindValue(':NAM','SMITH',PDO::PARAM_STR);
        $statement->bindValue(':ID',1,PDO::PARAM_INT);

        // execute query
        if($statement->execute()) {
            echo "record updated Successfully";
        }else{
            echo "No records updated";
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