<?php 

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "phplearn_ecom";

   $conn =  mysqli_connect($servername, $username, $password, $dbname);
   $dbdrop = "DROP DATABASE appointment";
   $dbcreate = "CREATE DATABASE phplearn_ecom";

   $sql = mysqli_query($conn, $dbdrop);

   // $sql=$conn->query($conn, $dbdrop);
    
   if($sql==true){
      echo "db delat done";
   }

   else{
      echo "Sorry";
   }


?>