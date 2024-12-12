<?php 

   $ip_address = "192.168.0.1111";

   if(filter_var($ip_address, FILTER_VALIDATE_IP)){
      echo "Perfect User";
   }
   else{
      echo "Chor User";
   }

?>