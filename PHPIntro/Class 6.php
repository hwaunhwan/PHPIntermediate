

<?php
// Class 6
// PHP has some built-in data types
// These data types include functions that work on them
// You can make your own data types
// You can define functions related to your custom data types
// Example: characters in a game
$name = "Bertio Liames";
$level = 10;
$attack = 5;
$defense = 7;
$intellect = 9;

//What if I want to add another character or a monster?
$name2 = "Narder Arrer";
$level2 = 20;
$attack2 = 15;
$defense2 = 21;
$intellect2 = 17;

//This would quickly get out of hand since it will take too long. What about arrays?
//Would work well, right?
$name = array ("Bertio Liames", "Narder Arrer");
$level = array (10,20);
$attack = array (5, 15);
$defense = array (7, 21);
$intellect = array (9, 17);

// Now I can use loops! And if I want to add more charaters, I can
// just append each stat to the relevant array!
foreach ($name as $characterName) {
    echo "$characterName<br>";
}

//Adding a new stat is still confusing.
// Use class and object to build your data types!!

//Object* is an instance* of a class
//The word 'new' creates an instance in a class
// __construct....every time you use 'new', it will call __construct function
// with in the same CLASS, $this .... is the current object you are working on!
class GameCharacter {
        public $name;
        public $level;
        public $health;
        public $magicPoints;
    function __construct($name, $level, $health, $points) {
        $this->name = $name;//name doesn't need $ sign in php since $this already called it
        $this->level = $level;
        $this->health = $health;
        $this->magicPoints = $points;
    }

    function is_dead(){
        if($this->health == 0) {
            return 'dead';
        } else {
            return 'not dead';
        }
    }
    function can_cast($requiredPoints){/*your code */}
}
// member variables
// instance variables
// fields
// attributes ...... all these mean the same (above example, under __construct, $name, $level, $health, $Points)
// -> is called 'dereference operator'


// We have created a data type called GameCharacter
// Just like there are strings and integers, now there are Game Characters
// We have specified that each GC will contain name, level, hp and mp
// It does not actually make any characters. It just tells PHP what a GC is made up of

//How to create one?

$player = new GameCharacter("Narder Arrer", 20, 15, 30);
echo $player->name. "<br>";
echo $player->level."<br>";

$player2 = new GameCharacter("Master Chief", 999, 0, 10);
echo $player2->name ."<br>";
echo $player2->level."<br>";

$player = $player2; //player 2 data takes over
echo $player->name. "<br>";
echo $player->level."<br>";

echo $player->is_dead() . "<br>";
echo $player->can_cast(5) . "<br>";


// member functions:
// instance method
// method -------> all three are the same = function within the context of Class






?>

