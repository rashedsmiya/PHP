<?php 

   session_start();
   if(isset($_SESSION['username'])){
      
      echo $_SESSION['username'];
   }else{
      $msg = "age login kore";
      header("location: login.php?msg=$msg");
   }
   
?> 
<a href="logout.php">Log Out</a>