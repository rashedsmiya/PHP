<?php 

   $url = "https://www.facebook.com/raselahmed7/";

   $url = filter_var($url, FILTER_SANITIZE_URL);

   if(filter_var($url,FILTER_VALIDATE_URL)){
      echo "Perfect";
   }
   else{
      echo "Sorry";
   }

?>