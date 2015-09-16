<?php

$name = 'Simon';
$age = 30;
$location = 'Austin';
$bankBalance = 15.33;
$pets = array('dog', 'cat', 't-rex');

$fruit = new stdClass();
$fruit->name = 'Apple';
$fruit->color = 'Red';
$fruit->price = 4.33;


// 2. Write if statements with is_* for each var

if(is_string($name)){
    echo 'Name is a string';
} else {
    echo 'Name is not a string';
}
echo "<br/>";

if(is_int($age)){
    echo 'Age is an integer';
} else {
    echo 'Age is not an integer';
}
echo "<br/>";

if(is_string($location)){
    echo 'Location is a string';
} else {
    echo 'Location is not a string';
}
echo "<br/>";

if(is_float($bankBalance)){
    echo 'Bank Balance is a float';
} else {
    echo 'Bank Balance is not a float';
}
echo "<br/>";

echo(is_float($bankBalance) ? 'yes it is a float' : 'no it is not a float'); // asking questions using bull expression and echo and ? & : symbols
//? & : in this case is called ternary operators
// ? TRUE : FALSE

echo "<br/>";

if(is_array($pets)){
    echo 'Pets is an array';
} else {
    echo 'Pets is not an array';
}
echo "<br/>";

if(is_object($fruit)){
    echo 'Fruit is an object';
} else {
    echo 'Fruit is not an object';
}
