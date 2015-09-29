
<?php


//$string = str_replace("\n", " ", $string);

//intval function

// or = ||

//use utf-8 on html

?>

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
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


/** @var array $countArray Result array that contains the counts. You will populate this array with appropriate numbers */
$countArray = array('num_numeric' => 0, 'num_string' => 0, 'num_bool' => 0);

/** @var array $wordArray Array of every word in the input string */
$wordArray = explode(' ', $inputString); //used preg_split for longer spacing issues
// check his answers

foreach ($wordArray as $word) {
    $word = trim($word);
    // Take out commas
    $word = str_replace(',', '', $word);
    $word = str_replace('.', '', $word);
    // Take out exclamation points
    $word = str_replace('!', '', $word); // you can also make an array for str_replace i.e. str_replace([',','.','!'], '', $word)
    // Take out all rec
    $word = str_replace("\n", '', $word); //you need to use double \ because \n will be recognized as new line
    if (is_numeric($word)) {
        ++$countArray['num_numeric'];
        echo $word . ' is a number' . PHP_EOL;
    } elseif ($word == 'true' || $word == 'false') {
        ++$countArray['num_bool'];
        echo $word . ' is a boolean' . PHP_EOL;
    } elseif (is_string($word)) {
        ++$countArray['num_string'];
        echo $word . ' is a string' . PHP_EOL;
    } else {
        echo $word . ' is something else!' . PHP_EOL;
    }
}
//echo '<pre>';
print_r($countArray);
//echo '</pre>';
