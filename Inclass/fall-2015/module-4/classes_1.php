<?php


//This is called defining the class
class Person
{
    public $name;

    public $age;

    public $location;

    protected $socialSecurityNumber;

    private $bankAccountNumber;

    // function in class is called method but still use syntax 'function'
    // This is a method, because it's in a class
    function isThisPersonCool()
    {
        if($this->location == 'Austin') {
            return $this->name . ', Yeah you are cool';
        }    else {
            return $this->name . ', No you\'re not, but please don\'t move here';
        }
    }
}


//class = car factory
//object = car = one version of the class


// This is when you use the class
// i.e. instantiate the class in to an object
echo '<pre>';

$chelsea = new Person();
$chelsea->name = 'Chelsea';
$chelsea->age = 24;
$chelsea->location = 'New York';

print_r ($chelsea);
echo $chelsea->isThisPersonCool();
echo '<hr/>';

$samir = new Person();
$samir->location = 'Austin';
$samir->age = 31;
$samir->name = 'Samir';

print_r ($samir);
echo $samir->isThisPersonCool();
echo '<hr/>';






?>