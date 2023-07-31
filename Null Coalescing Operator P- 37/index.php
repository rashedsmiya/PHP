<?php

$my_name = "Majumder";

// if(!isset($my_name)) {
//     $my_name = "Raj";
// }

// echo $my_name;

// $name_val = isset($my_name) ? $my_name : "Raj";

$another_val = "Raj";

$name_val = $my_name ?? $another_val;

echo $name_val;

?>