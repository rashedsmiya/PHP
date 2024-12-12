<?php 

   // $key_to_value = array(
   //    "id" => 10,
   //    "name" => "hadijaman",
   //    "email" => "mamurjor@gmail.com",
   //    "cell" => "0987654321"
   // );

   // $change_key = array_flip($key_to_value);

   // print_r($key_to_value);
   // echo "</br>";
   // print_r($change_key);

   $person_info_one = array(
      "id" => 10,
      "name" => "hadijaman",
      "email" => "mamurjor@gmail.com",
      "phone" => "098765432"
   );

   $person_info_two = array(
      "id" => 11,
      "name" => "rowza",
      "email" => "rowza@gmail.com",
      "cell" => "0987654321"
   );

   $match = array_intersect_key($person_info_one,$person_info_two);

   print_r($match);


?>