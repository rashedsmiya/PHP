<?php 

   $person_info = array(
      "key" => "value",
      "name" => "hadijaman",
      "cell" => "0987654321",
      "email" => "hadijaman@gmail.com",
      "website" => "mamurjor@gmail.com",
   );

   $divide = array_chunk($person_info,2);
   var_dump($divide);

?>