
<?php
// 1. Change to POST
// 2. Echo error messages if:
//      No name was entered
//      No email was entered
//      Email does not contain @ and .(strpos)

if(isset($_POST['submit'])) {
    echo $_POST['first_name'];
    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['FavoriteSports'];
    echo '<br>';

    if ($_POST['first_name'] == 'Enter your first name') {
        echo "What is your first name?<br>";
    }
    if ($_POST['email'] == 'Enter your email!') {
        echo "What is your email?<br>";
    }
    if (strpos($_POST['email'], "@") == false || strpos($_POST['email'], ".") == false) {
        echo "wrong email!<br>";
    }
}
?>


<form action="HW 4.php" method="POST">
    <input type="text" name="first_name" value="Enter your first name" onclick="this.value=''"><br> <!-- didn't require </input>
</form> <!--There are two methods: GET & POST...action & methods are html attributes and HW 1.php and GET are attribute values-->
    <input type="text" name="email" value="Enter your email!"onclick="this.value=''"><br>
    <select name="FavoriteSports">
        <option value="">Choose one...</option>
        <option value="Basketball">Basketball</option>
        <option value="Soccer">Soccer</option>
        <option value="Football">Football</option>
        <option value="Baseball">Baseball</option>
    </select><br>
    <input type="submit" name="submit" value="Subscribe to our mailing list!"> <!-- once you click submit, it will run HW 1.php -->
</form>


<p>
    <?php
    function cube($num) {
        return "$num^3 is ".($num*$num*$num);//ask how to superscript 3
    }
    echo cube(3)."<br>";
    echo cube(5)."<br>";
    echo cube(2)."<br>";
    ?>
</p>

<p>

    <?php
    function power($num, $pow) {
        return "$num^$pow is ". pow($num, $pow);
    }
    echo power(2,3)."<br>";
    echo power(3,4)."<br>";
    echo power(15,15)."<br>";
    ?>

</p>

<p>
<?php
function printRandomGreeting($person) {
    $greetings = array("Hi, ","Hello, ",'How are you, ', 'Nice to meet you ');
    $k = rand(0,3);
    return $greetings[$k].$person;
}
echo printRandomGreeting("Simon");
?>

</p>