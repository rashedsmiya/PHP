<?php 

   $userimage = $_FILES['userdefine'];

   $image_name = $userimage['name'];

   $image_name_array = explode('.',$image_name);

   $extention = $image_name_array[1];

   $allow_format = array("jpg","JPG","png","PNG");

   if(in_array($extention,$allow_format)){
      echo "Match Found";
   }
   else{
      echo "Match Not Found";
   }

?>