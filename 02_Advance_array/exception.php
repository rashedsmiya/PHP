<?php 

   function ageCalculate($age){

      if($age<=18){

         throw new Exception("tumi age hote hobe 18 er upore");
      }
      return true;
   }

   try{
      ageCalculate(15);
      echo "you are voter";
   }

   catch (Exception $exp){
      echo $exp->getMessage();
   }

   finally{
      echo "go next";
   }

?>