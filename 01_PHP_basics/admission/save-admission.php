<?php 

   $list=array(1,3,4,5,6,7);
   if(in_array(10,$list));
   in_array("1","2","3");


   $file_desctination = "studentimage/".basename(__FILES['phone']['name']);;
   $file_tmp_name = $_FILES["photo"]['tmp_name'];

   move_uploaded_file($file_tmp_name,$file_desctination);


?>