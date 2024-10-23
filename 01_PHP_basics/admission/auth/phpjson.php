<?php 

   $convert_json = json_encode($person_list);

   $post  = '{
      "userId": 1,
      "id": 1,
      "title": "Sunt aut facere repllat";
      "body": "quit et suscipt";
   }'; 
 
   $convert_toarray = json_decode($post);

   echo $convert_toarray->userId;
   echo $convert_toarray->id;
   echo $convert_toarray->title;
   echo $convert_toarray->body;

?>