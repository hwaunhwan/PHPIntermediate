
<?php
/* More form tags:
- Check boxes
-
Quiz: Make a page with a text field and submit button. When the form is submitted, display the value entered in the field on the page in bold and italic.
+ HW 4 answers
*/


?>

<form action="HW 4 Answers.php" method="POST">
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

    <input type="submit" name="submit" value="Get average salary">
</form>

<?php

print_r($_POST)."<br>";

if(isset($_POST['submit'])) {//you need to use ' ' for isset syntax
    echo "<strong><em>$_POST[company]</em></strong><br><br>";// no need for ' ' inside of string

    echo "This company has $_POST[employee_count] employees.";}
if ($_POST["is_public"] == "Yes") {
    echo "It is a public company.<br>";
}
else {
    echo "It is not a public company.";
}
echo "<br><br>";

?>

<br><br>

<?php
//function hw answers
function cube($num) {
    return $num*$num*$num;
}
echo cube(3);
echo "<br>";
echo cube(9);
echo "<br><br>";

function power($num,$to) {
    $result = 1;
    for ($k=0; $k<$to; $k++)
        $result = $result*$num;
    return $result;
}
echo power(3,5);
echo "<br>";
echo power (2,3);
echo "<br><br>";

function pRG($person) {
    $greetings = array ("hi ", "hello ", "hola ");
    $index = rand(0, count($greetings)-1);
    $myGreeting=$greetings[$index];
    echo $myGreeting. $person;
}

?>

