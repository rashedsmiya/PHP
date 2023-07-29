<?php

$amount = 1100;

if ( ($amount >= 1500) && ($amount <= 2000) ) {
    echo "$amount is between 1500 to 2000"; 
} else if ( ($amount >= 1200) && ($amount <= 1499 ) ) {
    echo "$amount is between 1200 to 1499";
} else {
    echo "Test";
}

?>