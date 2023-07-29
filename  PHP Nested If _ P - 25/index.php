<?php

$username = "abc";
$password = "1234";

if ($username == 'abcd' && $password == 1234) {
    echo "Hello user";
} else if ($username == 'abcd' && $password != 1234) {
    echo "Invalid password";
} else if ($password == 1234 && $username != 'abcd') {
    echo "Invalid username";
} else {
    echo "Invalid username / password";
}



if ($username == 'abcd') {
    if ($password == 1234) {
        echo "hello user";
    } else {
        echo "Invalid password",
    }
} else {
    echo "Invalid username";
}

?>