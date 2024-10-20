<?php 

   $number = array(1,3,4,5,6,7,8,9,0);

   if(!function_exists('check_even')){
      function check_even($var){
         return !($var & 1);
      }
   }

   $myoddnumber = array_filter($number, 'check_even');
   print_r($myoddnumber);


?>