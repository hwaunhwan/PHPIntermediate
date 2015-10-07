<?php

/**
 * Class Card represents and encapsulates data
 * and functionality for a playing card
 */
class Card
{
    /**
     * @var array
     */
    private $allowedSuits = array('Heart', 'Diamond', 'Spade', 'Club');
    /**
     * Heart, Diamond, Spade or Club
     * @var string
     */

    /**
     * Allowed ranks
     * @note could not use array merge in class
     * @var array
     */
    private $allowedRanks = array('A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K');


    /**
     *  Suit of card
     *  D, H, S, C
     *
     * @var string
     */
    protected $suit;

    /**
     * A, 2-10, J, Q, K
     * @var string
     */
    protected $rank;
    /**
     * Red or black
     * @var string
     */
    protected $color;
    /**
     * This is the HTML icon for the card!
     * @var string
     */
    protected $icon;

    /**
     * @param string $suit
     * @param string $rank
     */
    public function __construct($suit, $rank)
    {
        $this->suit = $suit;
        $this->rank = $rank;

        //Validate Suits
        $this->checkSuit();

        //Validate Ranks
        $this->checkRank();

        //Give color
        //$this->colorCard();

        //Give Icon
        $this->createIcon();
    }

    /**
     * Create a HTML icon for this card
     * @return void
     */
    protected function createIcon()
    {
        switch ($this->suit) {

            // Heart Icon
            case 'Heart':
                $this->icon = 'H';//'&hearts;';
                break;

            // Diamond Icon
            case 'Diamond':
                $this->icon = 'D';//'&diams;';
                break;

            // Spade Icon
            case 'Spade':
                $this->icon = 'S';//'&spades;';
                break;

            // Club Icon
            case 'Club':
                $this->icon = 'C';//'&clubs;';
                break;
        }
    }

    /**
     * Check to see if the suit is valid
     * @throws Exception
     * @return void
     */
    protected function checkSuit()
    {
        if (!in_array($this->suit, $this->allowedSuits)) {
            throw new Exception(
                $this->suit . ' is not allowed! You can pass: ' .
                implode(', ', $this->allowedSuits)
            );
        }
    }

    /**
     *
     * Check to see if the rank is valid
     * @throws Exception
     * @return void
     */
    protected function checkRank()
    {
        if (!in_array($this->rank, $this->allowedRanks)) {
            throw new Exception(
                $this->rank . ' is not allowed! You can pass: ' .
                implode(', ', $this->allowedRanks)
            );
        }

    }
//    /**
//     * Assign a color
//     * @return void
//     */
//    protected function colorCard()
//    {
//        if ($this->suit == 'Heart' || $this->suit == 'Diamond') {
//            $this->color = 'red';//'<span style="color:red;">'.$this->color. '</span>';
//        } else {
//            $this->color = 'black';//'<span style="color:black;">'.$this->color. '</span>';
//        }
//    }
    /**
     * Render a card for the browser. Its ok to return HTML
     * But in real life you want those concerns to be separated
     * @return string
     */
    public function render()
    {
        return '<img src="img/' . $this->icon . $this->rank . '.png" border="10" style="border-color: green">';
        //'<span style="color:'.$this->color.';">'.$this->icon.$this->rank. '</span>';
    }
}
//
//echo '<pre>';
//$card = new Card('Spade', 'A');
//echo $card->render() . "<br>"; //Spade A
//
//$card = new Card('Diamond', 'A');
//echo $card->render() . "<br>"; //Diamond A
//
//$card = new Card('Club', 'A');
//echo $card->render() . "<br>"; //Club A
//
//$card = new Card('Heart', 'A');
//echo $card->render() . "<br>"; //Heart A
