<?php


/**
 * Class Deck represents a deck of 52 cards and can pick a card or shuffle
 */
class Deck
{
    /**
     * Array of shuffled cards
     *
     * @var array
     */
    protected $Cards = array();


    /**
     * Create a deck and shuffle it
     */
    public function __construct()
    {
        $this->createCards();

//        $this->shuffle();
//
//        $this->getNumCards();
    }

    /**
     * Create all 52 cards
     * @return void
     */
    protected function createCards()
    {
        $suits = array('Diamond', 'Heart', 'Spade', 'Club');
        $ranks = array_merge(range(2, 10), array('J', 'Q', 'K', 'A'));
        foreach ($suits as $suit) {
            foreach ($ranks as $rank) {
                $this->Cards[] = new Card($suit, $rank);
            }
        }

    }

    /**
     * shuffle! By reference :)
     * @return void
     */
    public function shuffle()
    {
        shuffle($this->Cards);
    }

    /**
     * Get a single card from the shuffled deck
     *
     * @throws Exception
     * @return array
     */
    public function getCard()
    {
        $this->shuffle();
        /**
         * getting a card from the top of the deck
         */
        $card = array_pop($this->Cards);

        /**
         * error message when the deck is empty
         */
        if (empty($card)) {
            throw new Exception ('Deck is empty!');
        }

        return $card;
    }


    public function getNumCards()
    {
        return count($this->Cards);
    }


}

?>