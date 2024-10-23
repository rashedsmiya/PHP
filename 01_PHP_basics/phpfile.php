<?php 

   // echo readfile ("message.php");
  $mymessage = fopen("message.txt","r") or die("ami pari nai");

   // echo $mymessage;

   // $filelength = filesize("message.txt");

   // echo fread($mymessage, $filelength);

   // echo fgetc($mymessage); 

   // while(!feof($mymessage)){
   //    echo fgets($mymessage);
   // }

   while(!feof($mymessage)){
      echo fgetc($mymessage);
   }

   fclose($mymessage);

?>
