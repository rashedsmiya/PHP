<?php 

   $student_marks = array(
      "maths" => 80,
      "Physics" => 90,
      "Chemistry" => 85,
      "English" => 70,
      "Computer" => 80,
      "Islam" => 95,
   );

   $letter = array(
      "a" => "Allah Mohan",
      "b" => "Baitullah Allahar Ghor",
      "A" => "Allah Ek"
   );

   $change_key_case = array_change_key_case($letter,CASE_LOWER);

   foreach($change_key_case as $key => $subject_mark){
      echo $key."=".$subject_mark."<br>";
   }
   

?>