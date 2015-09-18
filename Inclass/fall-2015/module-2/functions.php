<?php

// Function declaration

/**
 * @param string $name This is the just the first name
 * @param string $location This is the state you live in
 * @param int $age This is how old you are
 */
//use /** to explain your var

function sayHello($name, $location, $age)
{
    return 'Hi ' . $name . ' ' . $location . ' is awesome for a ' . $age . ' years old';
}

$helloString = sayHello('Simon', 'TX', 30);

// Function usage or calling the function = sayHello();

echo $helloString;


/*
 * 1. Create a function that accepts two arguments
 * The first argument is the object to print, make sure its an object
 * The second ___optional___ argument is a title to print on top of the data
 */

/**
 * @param object $data array of your objects
 * @param string $name the title of your objects
 */

function pre($data, $name = null)
{ // making the second argument optional

    if (!empty($name)) {
        if (php_sapi_name == cli) {
            echo '\n';
            echo '------------------------';
        } else {
            echo "<h1>$name</h1>";
        }
    }

    if (is_object($data) || is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";

    } else {
        echo $data . "\n";
    }
}

$pets = array('dog', 'cat', 'walrus');
pre($pets, 'My Pets'); //'My Pets became optional

pre('simon');
echo "<br>";
echo "<br>";
echo "<br>";


$sapiName = php_sapi_name();

echo 'Server api: ' . $sapiName . '\n';


