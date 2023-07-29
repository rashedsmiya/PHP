<?php

  
$username = "ra_1";

$user_length = strlen($username);

if ( !($user_length >= 3 && $user_length <= 5)  ) {
    echo "Invalid Username";
} else {
    echo "valid username";
}


?>