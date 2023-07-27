<?php 

    // $name = 10; // integer
    // $name = 10.50; // Float / Decimale
    // $name = "Raj"; // String 
    // $user_Status = true or false // Boolian
    //    $name = null; // suno
    
    $name = "Harry";
    $friend = 'Rohan';
    echo "$name ka friend is $friend";

    // Integer - Non decimal number
    $income = 455;
    $debts = -655;

    echo $income;
    echo $debts;

    // Float - Decimal point number
    $income = 344.5;
    $debts = -45.5;
    echo $income;
    echo $debts;

    // Boolean - Can be either true or false
    $x = true;
    $is_friend = false;
    echo $x;
    echo "<br>";
    echo var_dump ($is_friend);

    // Object - Instances of classes
    // Employee is a class ---> harry can be one object

    // Array - Used to store multiple value in a single variable
    $friends = array("rohan", "shubhm", "skillf", "Larry");
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[2];
    echo "<br>";
    echo $friends[3];
    echo "<br>";
    echo $friends[4]; // echo $friend[4]; // will throw an arror as the size of array is 4

    // null
    $name = NULL;
    echo var_dump($name);

?>

