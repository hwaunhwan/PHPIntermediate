<?php


echo "I am here";
//echo "\n"; //will only show line breaks in the source
echo PHP_EOL;// same thing as \n
echo "So am I";

//die(); //everything below this line stops... also you can type exit;


$value = 0;


$castedValue = (bool) $value; //PHP reads from right to left...
//it will take $value and make it bool and save it in $castedValue
//var_dump will show the changed type

echo "$castedValue";

echo '<pre>';

var_dump($value); //shows type and value


print_r($value); //shows value only


$user = new stdClass();
$user->name = 'Simon';
$user->location = 'Austin';

print_r($user);

// 1. convert $user into an associative array

$CastedUser = (array) $user;

var_dump($CastedUser);

