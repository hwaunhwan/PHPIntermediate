<?php

class PlayingCard
{
    //typically, you never make property public!! Use protected or private
    //if you use public, others can modify your variables
    public $suite;

    public $rank;


    //constructor is used to give values to variable
    public function __construct($suite, $rank) //public is not needed here but using is best practice
    {
        $this->suite = $suite;
        $this->rank = $rank;

    }

}

$aceOfSpades = new PlayingCard('Spades', 'Ace');


echo '<pre>';
print_r($aceOfSpades);
