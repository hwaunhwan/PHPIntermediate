
<?php


session_start(); //every time you refresh, it will be built on top of previous work

if (isset($_POST['submit'])){
    $db = new mysqli("localhost","root","root","intro_to_php");

    $stmt = $db->prepare("INSERT INTO todo_list (item, date) VALUES (?, NOW())");//now () is mysql function that shows current time (try SELECT now(); on commend
    //or you can put VALUES (?,?)
    $stmt->bind_param("s",$item);
    //bind_param("ss"..... if you want to use php function date()
    $item = $_POST['todo'];
    $stmt->execute();

    $sql = "SELECT * FROM todo_list"; //show what's inside the todo_list table
    $result = $db->query($sql);

        echo "<table border='1'>";
        foreach ($result as $row) {
            echo "<tr><td>$row[item]</td><td>$row[date]</td></tr>";

    }
        echo "</table>\n";

    }
?>

<form action = "HW 8 Answer.php"
      method = "POST">

<input type="text" name="todo">
<input type="submit" name="submit">
</form>

<?php

//USE ALTER on mysql to add a column (i.e. ALTER TABLE todo_list ADD Date TEXT;

// Programming Assignment 1:
// Modify the to-do list page from last class to use MySQL.
// When the "submit" button is clicked, add a row to the todo_list table
// containing the value of the text field.

// When the page is loaded, display all of the todo items.
?>
                <!-- end the table -->

<!-- Programming Assignment 2: Modify your todo list to use a table.

     Extra credit (maybe?): Add a date column to your todo_list table.
     Save the current date/time when a todo item is added. -->