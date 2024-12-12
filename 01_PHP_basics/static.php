<?php 

   function mynumber(){
     static $qty = 1;
      echo $qty."</br>";
      $qty++;
   }

   mynumber();
   mynumber(); 
   mynumber();

?>