

<html>

<head>

</head>

<body>

<?php
$favoritePet = isset($_POST['favoritePet']) ? $_POST['favoritePet'] : null;
?>
<form name="collectDataForm" action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
    <input type="text" name="favoritePet" size="20"
           value="<?php echo($favoritePet);?>"/>
<!--    this php makes the value stay after refresh-->
    <input type="submit" value="Do work!"/>
</form>

<?php

$classMates = array ('alex','jerry', 'simon', 'samir', 'brian', 'traci', 'jared');
$numClassmates = count($classMates);
$index = rand(0, $numClassmates-1);
// echo $classMates[$index]. " is awesome!";
//echo '<pre>';
//print_r($_SERVER); //look for php self

//echo "GET:";
//print_r($_GET);
//echo '<br/>';
//
//echo "POST:";
//print_r($_POST);
//echo '<br/>';
//
//echo "Request:";
//print_r($_REQUEST); //contains both GET & POST
//echo '<hr/>';

echo $classMates[$index] . ' ' . $favoritePet;


?>
</body>

</html>