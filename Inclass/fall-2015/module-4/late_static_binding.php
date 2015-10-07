<?php

class Army
{
    public static $strength = 20;

    public static function getStrength()
    {
        return static::$strength; // will check child class first then parent class
        //This is called late static binding



        //return self::$strength; will renter 20 for battalion
    }
}


class Battalion extends Army
{
    public static $strength = 10;
}




echo 'Army strength: '. Army::getStrength() ."<br/>";

echo 'Battalion strength: '. Battalion::getStrength()."<br/>";
//Batallion str is 10 but it will render 20 because it will render the parent static as the default
//


class Unit extends Battalion
{
    public static $strength = 5;
}

echo 'Unit strength: '. Unit::getStrength() ."<br/>";
