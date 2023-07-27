<?php 

define("NAME", "Raj");

define("AMOUNT", 20);

echo NAME;

echo "<br>";

echo AMOUNT;

echo '<br>';

// Array Constants

define("cars", [
   "Alfa Romeo",
   "BMW",
   "Toyota"
]);

echo cars[2];

echo '<br>';

define("GREETING", "Welcome to w3Schools.com!");

function myTest() {
    echo GREETING;
}

myTest();

?>