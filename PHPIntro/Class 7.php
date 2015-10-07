
<?php


class _Monster
{
    public $xCoord;
    public $yCoord;
    public $health;
    public $drops;
}


class _Player
{
    public $xCoord;
    public $yCoord;
    public $health;
    public $username;
    public $inventory;
}

//DRY = Don't repeat yourself
//Above examples, xCoord, yCoord, and health overlaps
//use inheritance

//we already know that duplicate code is bad. How can we eliminate the redundancy?

?>
<p>
<?php

class GameCharacter //parent class
{
    public $xCoord;
    public $yCoord;
    public $health;

    function __construct($x, $y, $health)
    {
        $this->xCoord = $x;
        $this->yCoord = $y;
        $this->health = $health;
    }
}
// Now we can take advantage of this when creating our Player and Monster
//We use inheritance with the keyword "extends".

class Player extends GameCharacter //child class
{
    public $username;
    public $inventory;
}

class Monster extends GameCharacter //child class
{
    public $drops;

    function __construct($drops) {
        parent::__construct(60, 70, 80);// it will run parent construct first
        $this->drops = $drops;
    }
}
//monster has no explicit definition of xCoord, yCoord, and health
$monster = new Monster(1, 2, 3, 4);
echo $monster->xCoord. "<br>";
echo $monster->yCoord. "<br>";
echo $monster->health. "<br>";
//but it's valid

//CS terms
// The _superclass_ is the parent class
// The _subclass_ is the child class

//The same member function can be in the parent and child class.
// This is called overriding.


class Super{
    function sayHi() {
        echo 'hi from super!';
    }
}

class Sub extends Super {
    function sayHi() {
        echo 'hi from sub!';
    }
}

$sup = new Super();
$sup->sayHi();
echo '<br>';
$sub = new Sub();
$sub->sayHi();
echo '<br>';


// The same member variable cannot


class Test {
    public $member;

    function a(){
        $test = 5; //separate from $test in b()
        $this->member = 10; //same member variable
    }

    function b()
    {
        $test = 5; //separate from $test in a()
        $this->member = 20; // same member variable
    }
}


//Formalizing OOP: Inheritance and Encapsulation
//Inheritance is what we just did above.
//Encapsulation is the idea that data should be packaged together with
//the function that operate on that data.

//Together, inheritance and encapsulation allow us to create clean,
//easily reusable modules of code called classes.
?>


    <?php

    //Assignment:
//Write class Vehicle. A Vehicle has a number of wheels and a function
//called 'drive'. 'drive' should print "Driving a ___ with ___ wheels"
//where the first blank is the type of Vehicle and the second blank
// is the number of wheels.

//Write subclasses Bicycle and Car that extend Vehicle
//A bicycle has 2 wheels and a car has 4.
//"has a" indicates a member variable
//"is a" indicates inheritance

/*Advanced: A Car needs gas. Add a member variable representing how much gas is left in the car.
            "gas' starts out as 100, and when the car is driven, it decreases by 5.
            Modify the drive() method to echo how much gas is left

            Riding a Bicycle safely requires a helmet. Add a parameter to Bycicle's constructor
            that specifies what type of helmet is being used. Add a new function "switchHelmet" that allows
            a rider to put on a different helmet. Echo the helmet that's in use in drive().
*/

class Vehicle {
    public $type;
    public $wheels;
    function __construct($type, $wheels)
    {   $this->type=$type;
        $this->wheels = $wheels;
    }
        function drive(){
            return "Driving a $this->type with $this->wheels wheels";
    }
}
class Bicycle extends Vehicle{
public $helmet;

    function __construct($helmet)
    {
    parent::__construct("bike", 2);
        $this->helmet = $helmet;
}
    function switchHelmet ($newHelmet) {
        $this->helmet = $newHelmet;
    }
    function drive()
    {
        parent::drive();
        Echo "Wearing a $this->helmet.<br>";}
}

class Car extends Vehicle{
    public $gas;

    function __construct()
    {
        parent::__construct("car",4);
        $this->gas = 100;
    }
    function drive(){
        parent::drive();
        $this->gas-= 5;
        echo "Now I have $this->gas percent of gas left.<br>";}
}

$bike = new Bicycle("bell");
echo $bike->drive("bell"); //prints 'Riding a bike with 2 wheels'
echo '<br>';
$car = new Car();
echo $car->drive();//prints 'Driving a car with 4 wheels'

?>


</p>
<?php
/*
 *
 $_SESSION
$_POST
$_GET

These 3 are called "Superglobals"

seesion_start(); //every time you refresh, it will be built on top of previous work
$key = "test" . rand (1,10);
$_SESSION[$key] = rand (1,10);

print_r($_SESSION);
*/
?>