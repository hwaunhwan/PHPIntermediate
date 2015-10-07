<?php

/*Creating a connection:
mysqli's __construct takes 4 things: a databse server address, a username, a password, and a database name
(http://php.net/manual/en/mysqli.quickstart.connections.php)
localhost == 127.0.0.1 (same server as the one running the PHP)
*/
// Why does it adds same things again? Because it got added to the database when I refreshed it
    $db = new mysqli("localhost", "root", "root", "aca");
    if ($db->connect_errno) {
        echo "Failed to connect to MySQL :( <br>";
        echo $db->connect_error;
        exit();
    }

    $stmt = $db->prepare("INSERT INTO T1 (item) VALUES (?)");
    $item = "Austin";
    $stmt->bind_param("s", $item);
    $stmt->execute();

    $item = "Dallas";
    $stmt->execute();

    $item = "San Antonio";
    $stmt->execute();


    $sql = "SELECT * FROM T1";
    $result = $db->query($sql);
    if ($result) {
        foreach ($result as $row) {
            echo $row['item'] . "<br>";
        }
    } else {
        echo $db->error;
    }


/*
 *
if (isset($_POST['submit'])){
    $db = new mysqli("localhost","root","root","intro_to_php");

    $stmt = $db->prepare("INSERT INTO todo_list (item) VALUES (?)");
    $stmt->bind_param("s",$item);

    $item = $_POST['todo'];
    $stmt->execute();

    $sql = "SELECT * FROM todo_list"; //show what's inside the todo_list table
    $result = $db->query($sql);
    if ($result) {
        foreach ($result as $row) {
            echo $row['item'] . "<br>";
        }
    } else {
        echo $db->error;
    }
    }
?>

<form action = "class 8 activity.php"
      method = "POST">

<input type="text" name="todo">
<input type="submit" name="submit">
</form>
 */
?>