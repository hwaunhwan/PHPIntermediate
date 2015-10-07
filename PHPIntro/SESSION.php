
<?php


session_start(); //every time you refresh, it will be built on top of previous work
if (!isset($_SESSION['list'])){
    $_SESSION['list']=array();
}

if (isset($_POST['submit'])){
    //add the text in 'todo'
    //to the SESSION variable 'list'
    array_push ($_SESSION ['list'],
                $_POST['todo']);
    }


?>

<?php

?>

<form action = "session.php"
      method = "POST">

<input type="text" name="todo">
<input type="submit" name="submit">
</form>

<?php
//use a for loop to print out the contents of 'list'
foreach ($_SESSION['list'] as $k) {
    echo "<li>$k</li>";
}
?>