
<?php

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
        echo "<tr><td>$row[item]</td><td>$row[date]</td>";
        echo "<td>\n<form>";
        echo "<input type='hidden' name='id' value='$row[id]'>";
        echo "<input type='submit' name='delete' value='delete'>";
        echo "</form></td></tr>";
    }
    echo "</table>\n";

}
?>

<form action = "Class 9 Activity.php"
      method = "POST">

    <input type="text" name="todo">
    <input type="submit" name="submit">
</form>
