
<?php
/* More form tags:
- Check boxes
-


?>



*/

print_r($_POST)."<br>";

if(isset($_POST['submit'])) {//you need to use ' ' for isset syntax
    echo "<strong><em>$_POST[company]</em></strong><br><br>";// no need for ' ' inside of string

    echo "This company has $_POST[employee_count] employees.<br>";}
if ($_POST["is_public"] == "Yes") {
    echo "It is a public company.<br>";
}
else {
    echo "It is not a public company.<br>";
}
echo "<br><br>";

?>


<form action="Class 5.php" method="POST">
    Compnay:
    <input type="text" name="company"><br>

    <select name="employee_count">
        <option>0-50</option>
        <option>51-100</option>
        <option>101-250</option>
        <option>251+</option>
    </select><br><br>

    Is this a public company?<br>
        <input type="radio" name="is_public" value="Yes">Yes<br>
        <input type="radio" name="is_public" value="No">No<br><br>

    Perks of working here:<br>
        <input type="checkbox" name="pool_table"> Pool table<br>
        <input type="checkbox" name="free_lunch"> Catered lunch<br>
        <input type="checkbox" name="slurpee_machines"> Slurpee machine<br>
        <input type="checkbox" name="fireman_pole"> Fireman's pole<br>
        <input type="checkbox" name="ping_pong"> Ping-pong table<br><br>

    Why do you want to work here? <br>
    <textarea name="comments" rows="10" cols="40"onclick="this.value=''">
        Enter your comments here......
    </textarea><br><br>


    <input type="submit" name="submit" value="Get average salary">
</form>

<?php
// Form Activity
// Create a text field and submit button
// When the form is submitted, run the value of the text field through the funciton of your choice,
// and display the result
?>
<p>

<form action="Class 5.php" method="POST">
    <textarea name="Func" rows="10" cols="40" onclick="this.value=''">
    Name here....
    </textarea>
    <input type="submit" name="submitit" value="Answer">
</p>
<?php

function pRG($name) {
    $greetings = array ("Hi ", "Hello ", "Hola ");
    $index = rand(0, count($greetings)-1);
    $myGreeting=$greetings[$index];
    echo "<em>".$myGreeting. $name."</em>";
}
    if(isset($_POST['submitit'])) { //will run the program is you click answer button
        pRG($_POST['Func']);
}
?>