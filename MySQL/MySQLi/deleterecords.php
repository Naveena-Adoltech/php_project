<body>
    <h1> MYSQLi - Connection </h1>
   <?php
    $id=4;
    $query="DELETE FROM student where ID=$id";
    $hostname='localhost';
    $dbname='schooldb';
    $username ='root';
    $password="";

    try{
        $db=new mysqli($hostname,$username,$password,$dbname);

        //check connection
        if($db->connect_error)
           die("Connection Failed! .$db->connect_error");

           if($db->query($query)=== TRUE){
             echo "Success!";
           }else{
            echo "Failed" . $db->error;
           }

         // close connection
         $db->close();  

      }catch(Exception $e){
        $error_message= $e->getMessage();
        echo "<p> Error Message: $error_message</p>";
    }
    ?>
     </body>
     </html>