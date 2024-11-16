<?php 

      $conn = mysqli_connect('localhost', 'root', '', 'sms');

      if($conn){
         
          $sql = "DELETE FROM students where roll = 1";
 
          if(mysqli_query($conn, $sql)){
            echo "Deleted";
          }

      } else{
         
         echo "Not Connectd";
      }
   