
<?php
/*
Class 4

"Else if" example

if($seaon=='summer'){
    swim(); //code stops if it's summer
}
    else if ($season == 'winter'){
        ski(); //stops here if it's winter //as many else if as you want
}
else {
    sit_at_home(); //otherwise it renders this. //only one else in the end
}
*/
?>


<?php
//Create an array of seasons and pick one randomly
//Then use an if... else if.... else to check if it's summer, winter, or something else.
//Echo some output in each case.

$season = array ("Spring", "Summer", "Fall", "Winter");
$k = rand (0,3);

if ($season[$k] == 'Summer') {
    echo "Hot ". $season[$k];
}
else if ($season[$k] =='Winter') {
    echo "Cold ".$season[$k];
}
else {
    echo "Nice ".$season[$k];
}
?>

<br>

Starting a form & text box in HTML
<br>
<form action="HW 1.php" method="GET">
<input type="text" name="first_name" value="Enter your first name"><br> <!-- didn't require </input>
</form> <!--There are two methods: GET & POST...action & methods are html attributes and HW 1.php and GET are attribute values-->
<input type="text" name="email" value="Enter your email!"><br>

<input type="submit" name="submit" value="Subscribe to our mailing list!"> <!-- once you click submit, it will run HW 1.php -->
</form>

<?php
//$_GET['first_name']
print_r($_GET);