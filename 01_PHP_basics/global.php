<?php 

   $cell = " 0987654321";

   function getAddress(){

    echo "amar number".$GLOBALS['cell'];

   }

   getAddress()

   $cell = " 09876543212";

   function getAddress(){
    global $cell;
    echo "amar number". $cell;

   }

   getAddress()

?>