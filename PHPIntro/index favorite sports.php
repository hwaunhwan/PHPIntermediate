
<form action = "HW 9.php" method = "POST">
    <input type="text" name="city">
    <input type="submit" name="submit">
</form>

<?php

/*Creating a connection:
mysqli's __construct takes 4 things: a databse server address, a username, a password, and a database name
(http://php.net/manual/en/mysqli.quickstart.connections.php)
localhost == 127.0.0.1 (same server as the one running the PHP)
*/
$db = new mysqli("localhost", "root", "root", "aca");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL :( <br>";
    echo $db->connect_error;
    exit();
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $delstmt = $db->prepare("DELETE FROM T1 WHERE id = ?");
    $delstmt->bind_param("i", $id);
    $delstmt->execute();//it's not deleting
}

if (isset($_POST['submit'])) {


    $stmt = $db->prepare("INSERT INTO T1 (item) VALUES (?)");//prepare is a method of the mysqli
    // you can use query to write mysql statement
    $stmt->bind_param("s", $item);//-> is called dereference
    $item = "$_POST[city]";
    $stmt->execute();


}
$sql = "SELECT * FROM T1";
$result = $db->query($sql);

echo "<table border='2'>\n";
foreach ($result as $row) {
    echo "<tr><td>$row[item]</td><td>\n";
    echo "<form action='HW 9.php' method='POST'>";
    echo "<input type='hidden' name='id' value= '$row[id]'>";
    echo "<input type='submit' name='delete' value='delete'>";
    echo "</form></td></tr>";// what does delete button do?
}
echo "</table>\n"."<br>";
?>


<?php
/*

$db = new mysqli("localhost", "root", "root", "intro_to_php");
if ($db->connect_errno) {
  echo "Failed to connect to MySQL :(<br>";
  echo $db->connect_error;
  exit();
}

if (isset($_POST['delete'])) {
  $id = $_POST['id'];
}

if (isset($_POST['submit'])) {

  // add the text in 'todo'
  // to the SESSION variable 'list'
  $stmt = $db->prepare("INSERT INTO todo_list (item, date) VALUES (?, ?)");

  $now = date("d F Y");

  $stmt->bind_param("ss", $_POST['todo'], $now);

  // Actually run the statement with the parameters we've substituted
  $stmt->execute();
}

?>

<form action="db_todo.php"
      method="POST">

<input type="text" name="todo">
<input type="submit" name="submit">

</form>
<ul>
<?php
  $sql = "SELECT * FROM todo_list";
  $result = $db->query($sql);
  echo "<table border='1'>\n";
  foreach ($result as $row) {
    echo "<tr><td>$row[item]</td><td>$row[date]</td><td>\n";

    echo "<form action='db_todo.php' method='POST'>";
    echo "<input type='hidden' name='id' value='$row[id]'>";
    echo "<input type='submit' name='delete' value='delete'>";
    echo "</form></td></tr>";
 }
  echo "</table>\n";
 */
?>