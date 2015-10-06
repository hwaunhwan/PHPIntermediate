
<?php


function getDeck()
{
    $shapes = array('D' => '&diams;', 'H' => '&hearts;', 'S' => '&spades;', 'C' => '&clubs;');
    $cards = array_merge(array('A'), range(2, 10), array('J', 'Q', 'K'));
    $deck = array();

    foreach ($shapes as $shape => $shapecolor) { //two different colors
        foreach ($cards as $card) {
            if ($shape == 'D' || $shape == 'H') {
                $color = 'red';
            } else {
                $color = 'black';
            }
            $deck[] = '<span style="color: '.$color.';">' . $shapecolor . '' . $card . '</span>';
        }
    }
    return $deck;
}

echo "<pre>";

$newdeck = getdeck();
print_r($newdeck);

echo "</pre>";


echo "<pre>";


function shuffleDeck(&$deck)
{
    shuffle($deck);
}
//shuffleDeck($newdeck);
//
//print_r($newdeck);
//
//echo "</pre>";

function deal($players, $numCards, &$shuffledDeck)
{
    $pHands = array();
    foreach($players as $player){
        $pCards = array();
        foreach($shuffledDeck as $k => $card){
            $pCards[] = $card;
            unset($shuffledDeck[$k]);
            if(count($pCards) == $numCards){
                break;
            }
        }
        $pHands[$player] = $pCards;
    }
    return $pHands;
}


echo '<pre>';

// ----------- USAGE -----------------

// Crack open a brand new deck of cards
$deck = getDeck();

// Shuffle the deck
shuffleDeck($deck);

echo "<br>";
echo '<h2>'.'New deck before dealing: <br/>'.'</h2>';
print_r($deck);

$players = array('Joe', 'Mary', 'Zim');
$numCards = 3;

$playerHands = deal($players, $numCards, $deck);

echo '<h2>'.'Hands each player has: <br/>'.'</h2>';
print_r($playerHands);

echo '<h2>'.'Deck after dealing: <br/>'.'</h2>';
print_r($deck);


echo '<pre>';

    ?>