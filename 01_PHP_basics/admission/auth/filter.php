<?php 

   $text = "<p>Allah Mohan</p>";

   // echo $text;
   // var_dump($text);
   // echo filter_var($text, FILTER_SANITIZE_STRING); 

   $course_fee = 32000;

   if(!filter_var($course_fee, FILTER_VALIDATE_INT)==false){
      echo "This is Integer";
   }

   else{
      echo "This is not Integer";
   }

?>