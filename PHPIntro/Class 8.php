
<?php
/* Database
Review: A place where you can store structured and persistent data
    -Structured: the data is stored in tables with columns, which are defined
                in a specific format called a schema
                More formally: the schema is the set of tables and their columns

    -Persistent: the data lives on your server, and so it lasts beyond the life
                of the current web request. It even stays around if your server restarts.

4 Basic Operations: CRUD
Create: INSERT INTO customer (name, email) VALUES ("Shirley", "shirley@gmail.com)
Read:   SELECT * FROM customer WHERE name = 'John';
Update: UPDATE customer SET name='Jon'
Delete: DELETE FROM customer WHERE customer

DESCRIBE = shows all the columns

Creating some example tables from the
1. cd Desktop/VirtualMachines
2. vagrant ssh
3. mysql -u root -proot

DATABASE has Tables and Tables has Columns and Rows

CREATE DATABASE intro_to_php;
CREATE TABLE todo_list (id INT AUTO_INCREMENT, item TEXT, PRIMARY KEY(id));

//PRIMARY KEY = just an internal thing to identify; put it last when you create a table


Using this stuff from PHP
Creating a connection:
mysqli's __construct takes 4 things: a databse server address, a username, a password, and a database name
(http://php.net/manual/en/mysqli.quickstart.connections.php)
localhost == 127.0.0.1 (same server as the one running the PHP)
*/

$db = new mysqli("localhost","root","root","intro_to_php");
if ($db->connect_errno){
    echo "Failed to connect to MySQL :( <br>";
    echo $db->connect_error;
    exit();// exit function stops everything immediately
}

//Running queries
//We use the method 'prepare' to load an INSERT SQL statement in PHP
$stmt = $db->prepare("INSERT INTO todo_list (item) VALUES (?)");
// ? - things we want to substitute in
// i   corresponding variable has type integer
// d   corresponding variable has type double/decimal
// s   corresponding variable has type string
$item = "Make coffee";//or any string I want to use on line 49
$stmt->bind_param("s", $item);//bind it so others can't type in malicious code such as drop todo_list to delete the table
//if line 49 had VALUES (?,?,?,?) then line 57 would say bind_param("ssss", $item,$date,$Done,$COST) etc.
//
// Actually run the statement with the parameters we've substituted
$stmt->execute();

//Lets add another item to the todo_list. We can reuse the same $stmt multiple
//times while substituting in different values for the ?.

$item = "Write some code";
$stmt->execute();

$item = "Collect paycheck";
$stmt->execute();
// Go back to the terminal and check what you just added by using

//How to do that SELECT in PHP?
//We use query () to run a SELECT.

$sql = "SELECT * FROM todo_list";
$result = $db->query($sql);
if ($result) {

    foreach ($result as $row) {
        echo $row['item'] . "<br>";
    }
} else {
        echo $db->error;
    }
// Programming Assignment 1:
// Modify the to-do list page from last class to use MySQL.
// When the "submit" button is clicked, add a row to the todo_list table
// containing the value of the text field.

//When the page is loaded, display all of the todo items.


?>