<?php 

   function getFullName($firstName,$lastName){
      
      $fullName = $firstName.$lastName;
      return $fullName;
   }
  
   function PriceCalculate($price,$qty){
      $total_price = $price*$qty;
      return $total_price; 
   }

?>