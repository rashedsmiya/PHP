<?php 

   $column = array(
      array(
         'id' => 1,
         'username' => 'hadijaman',
         'cell' => '034837483',
      ),

      array(
         'id' => 2,
         'username' => 'mamurjor',
         'cell' => '034837483',
      ),

      array(
         'id' => 3,
         'username' => 'hadijaman',
         'cell' => '034837483',
      ),
   );

   $username = array_column($column,'id','username');
   print_r($username);

?>