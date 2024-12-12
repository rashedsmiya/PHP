<?php 

   $person_email = "hadijaman@gmail.com";

   $person_email = filter_var($person_email,FILTER_SANITIZE_EMAIL);

   if(filter_var($person_email, FILTER_VALIDATE_EMAIL)){
      echo "Project";
   }
   else{
      echo "Sorry";
   }

?>