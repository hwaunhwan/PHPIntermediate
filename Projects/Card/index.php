<!-- Questions
1. How to play it again! //Cookies, Session
2. How to make the form/input disappear after submit
3. How to get the value from the class on player.php line 60   use getter (command + N) and make $card = new Card() .... $rank=getCard() etc etc on player.php
4. How to declare the winner on the footer!


-->


<html>
<head>
    <title>Simon Kim's Card Game HW</title>

    <meta content="PHP Card Game" name="title"/>
    <meta content="Homework 4" name="description"/>

    <link rel="stylesheet" type="text/css" href="Basic.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>


<body>

<!--Wrapper Class-->
<div id="wrapper">
    <nav> <!-- Top part -->
        <a href="#" id="logo"><img src="logo.png"/></a>
        <ul>
            <li>PHP Intermediate Class Homework 4 - Let's Play 21!</li>
        </ul>
    </nav>

    <div id="header" class="width_1000">

        <form action="index.php" method="POST">
            <input type="text" name="name" value="Enter your first name" onclick="this.value=''">

            <input type="submit" name="submit" value="Enter!"><br><br>
<!--            -->
            <?php
//            if (isset($_POST['submit'])) {
//                echo '<input type="submit" name="Re-Do" value="Re-Do">';
//            }
//            ?>

        </form>
        <?php

        require("card.php");
        require("deck.php");
        require("player.php");

        if (isset($_POST['submit'])) {

        $Name = $_POST['name'];
        // Create a deck and shuffle it
        $Deck = new Deck();
        $Deck->shuffle();

        // Create the new players + two AI players
        $PlayerNew = new Player($Name);
        $PlayerBob = new Player('Bob');
        $PlayerJoe = new Player('Joe');
        $PlayerSue = new Player('Sue');


        // Give the new player 3 cards
        $PlayerNew->giveCard($Deck->getCard());
        $PlayerNew->giveCard($Deck->getCard());
        $PlayerNew->giveCard($Deck->getCard());

        // Give bob 3 cards
        $PlayerBob->giveCard($Deck->getCard());
        $PlayerBob->giveCard($Deck->getCard());
        $PlayerBob->giveCard($Deck->getCard());

        // Give joe 3 cards
        $PlayerJoe->giveCard($Deck->getCard());
        $PlayerJoe->giveCard($Deck->getCard());
        $PlayerJoe->giveCard($Deck->getCard());

        // Give sue 3 cards
        $PlayerSue->giveCard($Deck->getCard());
        $PlayerSue->giveCard($Deck->getCard());
        $PlayerSue->giveCard($Deck->getCard());

        ?>
        <div class="left_block">

            <?php

            // Show all the cards for the new player
            echo '<h2>' . $PlayerNew->getName() . '</h2>';
            echo $PlayerNew->render();
            //        echo $PlayerNew->addUp();
            echo '<br/>';

            ?>
        </div>

        <div class="right_block">

            <?php

            // Show all the cards for Bob
            echo '<h2>' . $PlayerBob->getName() . '</h2>';
            echo $PlayerBob->render();
            echo '<br/>';

            ?>
        </div>
    </div>

    <div class="clearfix"> <!-- adding some space -->
    </div>


    <div id="bottom" class="width_1000">
        <div class="left_block">

            <?php

            // Show all the cards for Joe
            echo '<h2>' . $PlayerJoe->getName() . '</h2>';
            echo $PlayerJoe->render();
            echo '<br/>';

            ?>

        </div>

        <div class="right_block">

            <?php

            // Show all the cards for Sue
            echo '<h2>' . $PlayerSue->getName() . '</h2>';
            echo $PlayerSue->render();
            echo '<br/>';

            ?>

        </div>
    </div>

    <div class="clearfix"> <!-- adding some space -->
    </div>

    <footer>
        <p>
            <?php

            echo 'Number of cards remaining in the deck: ' . $Deck->getNumCards();

            ?>

        </p>

        <p>Thanks for playing!</p>

    </footer>
    <?php
    //    echo "<pre>";
    //    echo $PlayerNew->addUp();
    if (isset($_POST['Re-Do'])){
    $Name = $_POST['name'];
    // Create a deck and shuffle it
    $Deck = new Deck();
    $Deck->shuffle();

    // Create the new players + two AI players
    $PlayerNew = new Player($Name);
    $PlayerBob = new Player('Bob');
    $PlayerJoe = new Player('Joe');
    $PlayerSue = new Player('Sue');


    // Give the new player 3 cards
    $PlayerNew->giveCard($Deck->getCard());
    $PlayerNew->giveCard($Deck->getCard());
    $PlayerNew->giveCard($Deck->getCard());

    // Give bob 3 cards
    $PlayerBob->giveCard($Deck->getCard());
    $PlayerBob->giveCard($Deck->getCard());
    $PlayerBob->giveCard($Deck->getCard());

    // Give joe 3 cards
    $PlayerJoe->giveCard($Deck->getCard());
    $PlayerJoe->giveCard($Deck->getCard());
    $PlayerJoe->giveCard($Deck->getCard());

    // Give sue 3 cards
    $PlayerSue->giveCard($Deck->getCard());
    $PlayerSue->giveCard($Deck->getCard());
    $PlayerSue->giveCard($Deck->getCard());

    ?>
    <div class="left_block">

        <?php

        // Show all the cards for the new player
        echo '<h2>' . $PlayerNew->getName() . '</h2>';
        echo $PlayerNew->render();
        //        echo $PlayerNew->addUp();
        echo '<br/>';

        ?>
    </div>

    <div class="right_block">

        <?php

        // Show all the cards for Bob
        echo '<h2>' . $PlayerBob->getName() . '</h2>';
        echo $PlayerBob->render();
        echo '<br/>';

        ?>
    </div>
</div>

<div class="clearfix"> <!-- adding some space -->
</div>


<div id="bottom" class="width_1000">
    <div class="left_block">

        <?php

        // Show all the cards for Joe
        echo '<h2>' . $PlayerJoe->getName() . '</h2>';
        echo $PlayerJoe->render();
        echo '<br/>';

        ?>

    </div>

    <div class="right_block">

        <?php

        // Show all the cards for Sue
        echo '<h2>' . $PlayerSue->getName() . '</h2>';
        echo $PlayerSue->render();
        echo '<br/>';

        ?>

    </div>
</div>

<div class="clearfix"> <!-- adding some space -->
</div>

<footer>
    <p>
        <?php

        echo 'Number of cards remaining in the deck: ' . $Deck->getNumCards();

        ?>

    </p>

    <p>Thanks for playing!</p>


</footer>

<?php
}

}
?>

</div> <!-- end Wrapper -->


</body>
</html>