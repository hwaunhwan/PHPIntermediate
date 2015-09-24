<?php

$zoo = array(
    'zone_1' => "Monkey",
    'zone_2' => "Giraffe",
    'zone_3' => "Rhino"
);

echo "Our zoo: ";
    print_r($zoo);

$newZone = 'zone_4';
$newAnimal = "Lemur";

echo "<br/>";

$zoo[$newZone] = $newAnimal;

echo "Our new animal ".$zoo[$newZone]."\n";
echo "<br/>";

print_r($zoo);

//changing the value
echo "<br/>";

$zoo['zone_2'] = "Gorilla";
// if you want to add instead of replace
// $zoo['zone_2] = $zoo['zone_2]."Gorilla";
// but this is not a good method
print_r($zoo);

//remove a value
echo "<br/>";
unset($zoo['zone_1']);
print_r($zoo);
