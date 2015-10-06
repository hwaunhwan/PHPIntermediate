<?php

require ("card.php");
require ("deck.php");
require ("player.php");


// Create a deck and shuffle it
$Deck = new Deck();
$Deck->shuffle();

// Create two new players
$PlayerBob = new Player('Bob');
$PlayerSue = new Player('Sue');

// Give bob 3 cards
$PlayerBob->giveCard($Deck->getCard());
$PlayerBob->giveCard($Deck->getCard());
$PlayerBob->giveCard($Deck->getCard());
$PlayerBob->giveCard($Deck->getCard());
$PlayerBob->giveCard($Deck->getCard());

// Give sue 3 cards
$PlayerSue->giveCard($Deck->getCard());
$PlayerSue->giveCard($Deck->getCard());
$PlayerSue->giveCard($Deck->getCard());
$PlayerSue->giveCard($Deck->getCard());
$PlayerSue->giveCard($Deck->getCard());

// Show all the cards each player has been dealt
echo '<h3>'.$PlayerBob->getName().'</h3>';
echo $PlayerBob->render();
echo '<br/>';
echo '<h3>'.$PlayerSue->getName().'</h3>';
echo $PlayerSue->render();
echo '<br/>';
echo '<br/>';

echo 'Number of cards remaining in the deck: '.$Deck->getNumCards();

?>