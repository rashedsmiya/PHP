<?php 

$n = fgets(STDIN);
$stringInput = fgets(STDIN);

$stringArray = explode(' ', $stringInput);

function parseInt($el){
	return(int)$el;
}

$intArray = array_map('parseInt', $stringArray);

for ($i = 0; $i < count($intArray); $i++){
	$radius = $intArray[$i];
	$area = M_PI * $radius * $radius;
	echo $area . "\n"; 
}
