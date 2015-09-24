

<?php

/*
Homework 01 - Count Types

We will be creating a simple program, that can be executed in the CLI or in the browser.
Count the number of words, booleans and numbers in the provided input string.
The input string contains formatted numbers, and numbers with other formatting characters like exclamation marks.
Words like "true" and "false" are considered to be boolean. The sample code lays out the foundation for you to start work.
If you are not happy with the layout of the sample code, feel free to extract the parts you are happy with and do it your way.
Know that there are multiple ways to solve any given problem, and no two people will solve a problem in exactly the same way.
*/


$inputString
    = <<<MYSTR
Can you feel the pulse in your wrist? For humans the normal pulse is 70 heartbeats per minute.
Elephants have a slower pulse of 27 and for a canary it is 1000!
If all the blood vessels in your body were laid end to end, they would reach about 60,000 miles.
In one day your heart beats 100,000 times.
Half your body’s red blood cells are replaced every seven days.
By the time you are 70.5 you will have easily drunk over 12,000 gallons of water.
Coughing can cause air to move through your windpipe faster than the speed of sound – over a thousand feet
per second, this is a true statement!
Germs only cause disease, right? But a common bacterium, E. Coli, found in the intestine helps us digest
green vegetables and beans (also making gases – pew!). These same bacteria also make vitamin K, which
causes blood to clot. If we didn’t have these germs we would bleed to death whenever we got a small cut!
It takes more muscles to frown than it does to smile, this is not false and a fact.
That dust on rugs and your furniture is not only dirt. It’s mostly made of dead skin cells.
Everybody loses millions of skin cells every day which fall on the floor and get kicked up to
land on all the surfaces in a room. You could say, “That’s me all over.”
It takes food 7.64 seconds to go from the mouth to the stomach via the esophagus.
MYSTR;

echo $inputString;


//HINT
// explode(), is_*, array assignment by key
// $countArray['num_numeric'] += 1;


/** @var array $countArray Result array that contains the counts. You will populate this array with appropriate numbers */
$countArray = array('num_numeric' => 0, 'num_string' => 0, 'num_bool' => 0);

/** @var array $wordArray Array of every word in the input string */
$wordArray = preg_split('/\s+/', $inputString); //used preg_split for longer spacing issues

echo "<br/>";

foreach ($wordArray as $i => $key) {
    $i > 0;
    echo $i . ' ' . $key . '<br/>';
}

echo "<br/>";

foreach ($wordArray as $i => $key) {
    /** mixed @var  $firstdigit Value of the first character of $key array */
    $firstdigit = $key[0];

    if ($key == 'false' | $key == 'true') {
        $countArray ['num_bool'] += 1;
    } elseif (is_numeric($firstdigit)) { //if the first character of of string is a number, count it as a number
        $countArray ['num_numeric'] += 1;
    } elseif ($key != '–') { // Not counting '-'
        $countArray ['num_string'] += 1;
    }
}

echo "<h3>Numbers, Strings and Booleans Counts</h3>";

echo $countArray ['num_numeric'] . "<br/>";
echo $countArray ['num_string'] . "<br/>";
echo $countArray ['num_bool'] . "<br/>";


echo "<br/>";