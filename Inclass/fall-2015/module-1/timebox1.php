<?php

// Create an array containing the numbers 1 to 100,000


// $numbers = range(1, 100000); using  range funciton
$numbers = [];

for ($i = 1; $i <=100000; $i++){
    $numbers[] = $i;
}

echo '<h3>Numbers are</h3>3>';
echo '<pre>';
print_r($numbers);
echo '</pre>';


?>

