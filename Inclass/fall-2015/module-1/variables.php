<?php
//Define some variables, and assign values to them


$personName = 'Jane Doe'; //string
$personAge = 26; // int
$bankBalance = 17.45; //float
$isCool = false; //bool

$fruits = ['orange', 'apple', 'papaya', 34, 53.2, ['foo', 'bar']]; // array; array can have str, int, float, bool or even array

$pets = array(
    'dog', 'cat', 'giraffe', 34, 53.2,
    array('foo', 'bar', ['snow','ball']),
    ['mix', 'and', 'match']
); // another way to array

echo '<h4>Fruits</h4>';
echo '<pre>';
print_r($fruits);
echo '</pre>';

echo '<h4>Pets</h4>';
echo '<pre>';
print_r($pets);
echo '</pre>';


echo 'Value: ' . $pets[4] . '<br/>';



################################################
##############ASSOCIATIVE ARRAYS################
################################################

# = Python & C style comment

$user = array(
    'name' => 'Simon', //'name' is a KEY and 'Simon' is a VALUE.....ONLY INT and STR works in associative array
    'age' => '30',
    'location' => 'Austin'
);

echo '<h4>Associative Array</h4>';
echo '<pre>';
print_r($user['name']); //different from stdClass... usring brackets
echo '</pre>';



################################################
###########STANDARD CLASS OBJECTS###############
################################################

$user2 = new stdClass();

$user2->name = 'Simon';
$user2->age = 30;
$user2->location = 'Austin';

echo '<h4>Standard Class Object</h4>';
echo '<pre>';
print_r($user2->name);//different from asso array... using arrows
echo '</pre>';


//function vs method ==== method is a function that is inside a CLASS

