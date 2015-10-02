<?php

/**
 * Class Card represents and encapsulates data
 * and functionality for a playing card
 */
class Card
{

    /**
     * Allowed suites characters
     * @var array
     */
    private $allowedSuites = array('Heart', 'Diamond', 'Spade', 'Club');

    /**
     * Heart, Diamond, Spade or Club
     * @var string
     */
    protected $suite; //= array('D' => '&diams;', 'H' => '&hearts;', 'S' => '&spades;', 'C' => '&clubs;');

    /**
     * A, 2-10, J, Q, K
     * @var string
     */
    protected $rank; //= array_merge(array('A'), range(2, 10), array('J', 'Q', 'K'));
    /**
     * Red or Black
     * @var string
     */
    protected $color;

    /**
     * This is the HTML icon for the card!
     * @var string
     */
    protected $icon;

    /**
     * Render a card for the browser. It's ok to return HTML
     * But in real life you want those concerns to be separated
     * @var string
     */
        public function __construct($suite, $rank)
    {
        $this->suite = $suite;
        $this->rank = $rank;

        $this->checkSuite();

        //How do I get the color?
        $this->colorCard();

        $this->createIcon();
    }


    /**
     * Check to see if the suite is valid?
     * @throws Exception
     * @return void
     */
    protected function checkSuite(){
        if(!in_array($this->suite, $this->allowedSuites)) {
            throw new Exception (
                $this->suite. ' is not allowed! You can pass: '.
                implode(', ', $this->allowedSuites)
            );
        }
    }
    /**
     * Assign a color
     * @return void
     */
    protected function colorCard()
{
        if ($this->suite == 'Heart'|| $this-> suite == 'Diamond')
    {
        $this->color = 'red';
    } else {
    $this->color = 'black';
    }
}

    /**
     * Create a HTML icon for this card
     * @return void
     */
    protected function createIcon()
    {
        //switch??
    }

    /**
     * Get an HTML rendering for this card
     * @return string
     */
    public function render()
    {
        return;
    }

}







?>
