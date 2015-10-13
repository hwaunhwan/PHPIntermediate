<?php

/**
 * Class Player represents a single player
 */
class Player
{

    /**
     * Player name
     *
     * @var string
     */
    protected $name;

    /**
     * Player's cards
     * @var array Cards[]
     */
    protected $Cards = array();

    /**
     * @param string $name Player's name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Give this player a card
     * @param $card []
     */
    public function giveCard(Card $card)
    {
        $this->Cards[] = $card;

    }

    /**
     * Render this player's cards
     * @return string
     */
    public function render()
    {
        $return = '';
        if (empty($this->Cards)) {
            $return .= 'Player has no cards';
        } else {
            foreach ($this->Cards as $Card) {
                $return .= $Card->render(); //render from card.php
            }
        }
        return $return;
    }

//    public function addUp()
//    {
//        $score=0;
//        foreach($this->Cards as $Card){
//            if ($Card->getRank() == 'K' ||
//                $Card->getRank() == 'Q' ||
//                $Card->getRank() == 'J' ||
//                $Card->getRank() == 'A')
//                {
//                $Card->getRank() = 11;
//                }
//
//            $score = $score + $Card->rank;
//        }
//        return $score;
//    }


    public function getName()
    {
        return $this->name;
    }

}


?>
