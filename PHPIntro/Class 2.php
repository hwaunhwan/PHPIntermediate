<?php
$myVar = 50;
echo "$myVar <br>";//double quotes replace variables with values
echo '$myVar <br>';//single quote just states the name of variables
echo $myVar . '<br>';
?>

Database = MySequol
Things we can do with Database = Create Read Update and Delete (CRUD)
See Notes on Mac

<br>

<?php
switch(rand(1,10)){
    case 0:
        break;
    case 1: ?>
        <strong> <?php echo "it was 1"; ?> </strong>
        <?php
        break;

    case 2:
    case 3:
?> <em> <?php echo "it was 2 or 3" ?> </em>
        <?php
    break;

    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
        ?> <h1> <?php echo "it was bigger than 3" ?> </h1>

<?php
    break;
    default:
        echo "<h1> We didn't handle this case!</h1> <br>";
        break;
}

?>

<br>
Arrays
<br>
<?php
$degrees = array("Marketing", "Electrical Engineering", "Integrative Studies", "Feminist Studies");

print_r($degrees);
echo "<br>";
echo $degrees[1];
echo "<br>";

echo '<pre>'; //띄어 쓰기
print_r($degrees);
echo '</pre>';

echo '<em>' . $degrees[rand(0,3)] . '</em>'; //싱글 코테이션으로 HTML 불러옴

// A Feminist Studies degree takes 125 credits.
// An Integrative Studies degree takes 120 credits.
// An EE degree takes 110 credits.
// A Marketing degree takes 130 credits.

//randomize
echo '<pre>';
switch ($degrees[rand(0,3)]){
    case "Marketing":
        echo $degrees[0] . " = 130 credits";
        break;
    case "Electrical Engineering":
        echo $degrees[1] . " = 110 credits";
        break;
    case "Integrative Studies":
        echo $degrees[2] . " = 120 credits";
        break;
    case "Feminist Studies":
        echo $degrees[3] . " = 125 credits";
        break;}
echo '</pre>';


?>

HI <br>


<?php

$degrees = array("Marketing", "Electrical Engineering", "Integrative Studies", "Feminist Studies", "Computer Science");

for($k = 0; $k <= 3; $k++){
   echo "$degrees[$k]<br>"; //doesn't show 'computer science' since its <=3
}
echo '<br>';
for($k = 0; $k < count($degrees); $k++) {
    echo "$degrees[$k]<br>";
}

echo '<br>';

//easiest way - use foreach
foreach($degrees as $degree) {
    echo "$degree<br>";
}


?>
<br>
<?php

$degrees = array("Marketing" => 130, //if you want to put 130 hours use "130 hours" instead of 130
                 "Electrical Engineering" => 110,
                 "Integrative Studies" => 120,
                 "Feminist Studies" => 125,
                 "Computer Science" => 100);

foreach($degrees as $deg => $hours){
    echo "$deg takes $hours hours!<br>";
}

//adding an item to the array
$degrees["Biology"] = 150;
echo'<br>';
echo $degrees["Biology"];

print_r(array_keys ($degrees));
echo '<br>';
echo '<br>';
$degree_names = array_keys ($degrees);
$num_degrees = rand(0,count ($degrees)-1);
echo $degree_names[$num_degrees] . " " . $degrees[$degree_names[$num_degrees]];

?>

