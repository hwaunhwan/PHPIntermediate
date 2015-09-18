<?php

$pets = ['dog', 'cat', 'beast'];
$flowers = ['rose', 'sunflower', 'mayflower'];


// 1. Merge both these arrays together
$pets_flowers = array_merge ($pets,$flowers);
echo "<pre>";
print_r ($pets_flowers);

echo "<br>";

// 2. Sort the arrays alphabetically
sort ($pets_flowers); //

echo '<h3>Sorted</h3>';
echo '<pre>';
print_r ($pets_flowers);

rsort ($pets_flowers); // rsort = reverse sort

echo '<h3>Reverse Sorted</h3>';
echo '<pre>';
print_r ($pets_flowers);


echo "<br>";

// 3. Count the number of elements in the array
$count = count ($pets_flowers);
echo $count;

echo "<br>";

echo 'The array has '. count($pets_flowers) . ' elements' . PHP_EOL;

if(in_array('dog', $pets_flowers)) {
    echo 'You have a dog';
}
?>




