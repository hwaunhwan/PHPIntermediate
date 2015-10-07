<?php


class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;


        $this->superComplicatingWork();
    }

    protected function superComplicatingWork()
    {
        //Do work!
    }

}


class Person extends Animal
{
    protected $address;

    public function __construct($name, $address)
    {
        parent::__construct($name);
        //If there's no $name, it will use parent's $name
        $this->address = $address;
    }
    //this constructor is overriding the parent's constructor's $name
}