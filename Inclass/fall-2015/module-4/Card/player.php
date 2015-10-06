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
     * @param Deck $card
     */
    public function giveCard (Card $card)
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
                foreach($this->Cards as $Card){
                    $return .= $Card->render();
                }
            }
        return $return;
    }

    public function getName()
    {
        return $this->name;
    }

}





?>
