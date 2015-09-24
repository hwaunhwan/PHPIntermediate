<?php

/*
class Father
{
    public $firstName = 'Samir';

    protected $favoriteColor = 'Orange'; //extended class can see but not acess

    private $socialSecurityNumber = '325-34-8724';//only Father class can see
}

class Child extends Father
{
    public function testAccess()
    {
        // public properties can be accessed from anywhere
        echo "Father's First Name: " . $this->firstName . PHP_EOL;

        // Protected properties can be accessed by a child class only!
        echo "Favorite Color: " . $this->favoriteColor . PHP_EOL;

        // Private properties cannot be accessed by children
        // Notice: Undefined property: Child::$socialSecurityNumber
        echo 'SS Number: ' . $this->socialSecurityNumber . PHP_EOL;
    }
}

$Child = new Child();
$Child->testAccess();

 */

class Vehicle
{
    public $Wheels;
    public $Hydraulics;
    public $Brand;
    protected $safetyRating = "AAA";
    private $vin;
}

class SUV extends Vehicle
{
    public $Name;
    public $Price;

    public $SUVSafety;

    function __construct() //when this class is called this is executed
    {
        echo "Constructor Called\n";
    }

    /*function __construct($someValue)
    {
        echo "constructor called with vlaue: \n".$someValue."\n";
    }*/
    //only one constructor can be used... it works in other language

}

function makeSUV()
{
    $jeep = new SUV();
    $jeep->name = "Jeep";
    $jeep->wheels = 'Offroad Tires';

    return $jeep;
}

$myJeep = makeSUV();
echo "Car Info: " . $myJeep->name . " " . $myJeep->wheels . "\n";
echo "Jeep Safety: " . $myJeep->SUVSafety . "\n";

?>