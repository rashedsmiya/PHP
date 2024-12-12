<?php 

   $price_list = array(


      'a' => 50,
      'e' => 60,
      'c' => 70,
      'd' =>80,
   );

   // hadi = 1,2,3
   // jaman = 1,2,3,4,

   $another_price_list = array(
      'a' =>50,
      'b' =>60,
      'c' =>70,
   );

   $third_price_list = array(
      'a' =>50,
      'b' =>60,
      'c' =>70,
   );
   
   $new_diff_arry = array_diff_key($price_list, $another_price_list,$third_price_list );
   var_dump($new_diff_arry);

   // array_diff(); valu parthoko koray
   // array_diff_assoc();



?>