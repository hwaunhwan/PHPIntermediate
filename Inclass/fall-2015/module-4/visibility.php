<?php

// @todo: show constructor overriding aka. parent::__construct()

// class should always start with capital letter and singular noun
class Animal
{
    public $name;

    public $hasHair;

    protected $isWealthy;
//click command n and click getters&setters....however, constructor is preferred
    /**
     * @return mixed
     */
    public function getIsWealthy()
    {
        return $this->isWealthy;
    }

    /**
     * @param mixed $isWealthy
     */
    public function setIsWealthy($isWealthy)
    {
        $this->isWealthy = $isWealthy;
    } //can be accessed only in parent or extended class

}

$dog = new Animal();
$dog->name = 'Maximus';
$dog->hasHair = true;
$dog->setIsWealthy(false);

class Human extends Animal
{
    public function __construct($isWealthy)
    {
        $this->isWealthy = $isWealthy;
    }


    /**
     * If the person is wealthy, say they are, otherwise, say they are not
     * @return string
     */
    public function checkWealth(){
        if($this->isWealthy) {
            return 'Yeah you\'re doing good';
        } else {
            return 'Do more work!';
        }
    }

}

$brian = new Human($isWealthy = true);
echo '<pre>';
var_dump($brian);

