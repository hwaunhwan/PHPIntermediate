<?php

//Do not use static!!!!


class aCard
{
    protected static $allowedSuits = array('D', 'H', 'S', 'C');

    /**
     * @return array
     */
    public static function getAllowedSuits()
    {
        return self::$allowedSuits;
    }

    public static function getSuits()
    {
        return self::$allowedSuits;
    }
}
//$card = new Card();
//$suits = $card->getAllowedSuits();


$suits = aCard::getallowedSuits();
//static let you access your properties inside the class from outside
// without instantiating it by using ::

echo "<pre>";
print_r($suits);

