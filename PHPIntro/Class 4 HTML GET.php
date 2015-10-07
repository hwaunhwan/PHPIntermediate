
<?php
//$_GET['first_name']
print_r($_GET);
print_r($_GET['first_name']);
?>

<form action="Class 4 HTML.php" method="GET">
    <input type="text" name="first_name" value="Enter your first name"><br> <!-- didn't require </input>
</form> <!--There are two methods: GET & POST...action & methods are html attributes and HW 1.php and GET are attribute values-->
    <input type="text" name="email" value="Enter your email!"><br>

    <input type="submit" name="submit" value="Subscribe to our mailing list!"> <!-- once you click submit, it will run HW 1.php -->
</form>

<?php

if(isset($_GET['submit'])) {
    //form processing goes here
    echo $_GET['first_name'];
    echo '<br>';
    echo $_GET['email'];
    echo '<br>';
}
?>
<p>

    <?php
    // 1. Change to POST
    // 2. Echo error messages if:
    //      No name was entered
    //      No email was entered
    //      Email does not contain @ and .(strpos)

    ?>
<form action="Class 4 HTML.php" method="POST">
    <input type="text" name="first_name" value="Enter your first name"><br> <!-- didn't require </input>
</form> <!--There are two methods: GET & POST...action & methods are html attributes and HW 1.php and GET are attribute values-->
    <input type="text" name="email" value="Enter your email!"><br>

    <input type="submit" name="submit" value="Subscribe to our mailing list!"> <!-- once you click submit, it will run HW 1.php -->
</form>


</p>