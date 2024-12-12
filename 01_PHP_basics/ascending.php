<?php

// $list = array("f","r","p","z","d","a");
// $list = array("77","66","55","44","33","22");

// sort($list);
// arsort($list);
// foreach($list as $single){
//    echo $single."</br>";
// }


$person_infos = array(
   'person_name' => 'hadijaman',
   'person_cell' => '0987654321',
   'person_address' => 'Mirpur-19',
   'a'       => 'a',
   'z'       => 'z',
);

// asort($person_infos);
// arsort($person_infos);
// ksort($person_infos);
krsort($person_infos);
foreach($person_infos as $key => $value){
   echo $value."</br>";
}

?>