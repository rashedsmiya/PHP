<?php 

      // $person_name = "hadijaman";
      // $person_call = "0987654321";
      // $person_email = "info@gmail.com";

      // echo $person_call.

      // $person_infos = array("hadi jaman","0987654321","mamurjor@gmail.com");
      
      // echo count($person_infos);

      // var_dump($person_infos);
      // 1.index array
      // 2.associative array
      // 3.Multidimensional array

      // দুই বাবে প্রকাশ করতে  পারি 

      // $person_infos = array("hadi jaman", "01746686898","mamurjorbd");
      // var_dump($person_infos);

      // $person = count($person_infos);

      // echo "Person Name is : ".$person_infos[0]."<br>";
      // echo "Person Call is : ".$person_infos[1]."<br>";
      // echo "Person email is : ".$person_infos[2];

      // এরে শুরু হয় ০ দিয়ে
      // []

      $product_info[0] = "Product";
      $product_info[1] = 10;
      $product_info[2] = 2;

      // var_dump($product_info);

      // for($i=0; $i<10; $i++){
      //     echo $i."</br>";
      // }

      $product_count = count($product_info);

      echo $product_count;

      for($i=0;$i<$product_count;$i++){
            echo '<br>';
            echo $product_info[$i];
      }

?>