<?php 

// $var1 = 20;
// $var2 = 20;

/*

> ---  $var1 > $var2 --- false

< ---  $var1 < $var2 -- false

>= --- $var1 >= $var2 -- true

<= --- $var1 <= $var2 -- true
 
== --- $var1 == $var2 --- false

!= --- $var1 != $var2 --- true

<> --- $var1 <> $var2 -- true

=== --- $var1 === $var2 -- false

!== --- $var1 !== $var2 -- true

*/

$var1 = 20;
$var2 = 30;

var_dump($var1 !== $var2); // true

?>