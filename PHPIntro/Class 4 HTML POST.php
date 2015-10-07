
<form action="index.php" method="POST">
    <input type="text" name="first_name" value="Enter your first name" onclick="this.value=''"><br> <!-- didn't require </input>
</form> <!--There are two methods: GET & POST...action & methods are html attributes and HW 1.php and GET are attribute values-->
    <input type="text" name="email" value="Enter your email!"onclick="this.value=''"><br>

    <input type="submit" name="submit" value="Subscribe to our mailing list!"> <!-- once you click submit, it will run HW 1.php -->
</form>

<?php
    // 1. Change to POST
    // 2. Echo error messages if:
    //      No name was entered
    //      No email was entered
    //      Email does not contain @ and .(strpos)

if(isset($_POST['submit'])) {
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

<p>
    Matt's Answer
    if(strpos($_POST['email'], '@') === FALSE) {
    // no @ in the email
    }
    else if (strpos($_POST['email'], '.') === FALSE) {
    // no . in the email
    }
    else {
    // all good
    }
</p>