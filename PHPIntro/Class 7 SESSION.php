
<?php
/*
$_SESSION
$_POST
$_GET

These 3 are called "Superglobals"
*/


session_start(); //every time you refresh, it will be built on top of previous work
$key = "test" . rand (1,10);
$_SESSION[$key] = rand (1,10);

print_r($_SESSION);
?>

<?php

?>

<form action = "Class 7 session.php"
      method "POST">

<input type="text" name="todo">
<input type="submit" name="submit">
</form>