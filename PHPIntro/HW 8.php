
<?php




// ? - things we want to substitute in
// i   corresponding variable has type integer
// d   corresponding variable has type double/decimal
// s   corresponding variable has type string


// Programming Assignment 1:
// Modify the to-do list page from last class to use MySQL.
// When the "submit" button is clicked, add a row to the todo_list table
// containing the value of the text field.

//When the page is loaded, display all of the todo items.

session_start(); //every time you refresh, it will be built on top of previous work

if (isset($_POST['submit'])){
    $db = new mysqli("localhost","root","root","intro_to_php");

    $stmt = $db->prepare("INSERT INTO todo_list (item) VALUES (?)");
    $stmt->bind_param("s",$item);

    $item = $_POST['todo'];
    $stmt->execute();

    $sql = "SELECT * FROM todo_list"; //show what's inside the todo_list table
    $result = $db->query($sql); ?>

    <table border="1">              <!-- start a table -->
                <tr>                          <!-- first row -->
                    <th>Todo Item</th>          <!-- header -->
                    <th>Date/Time</th>
                </tr>                         <!-- end first row -->

    <?php
        if ($result) {
        foreach ($result as $row) { ?>
                                     <!-- end second row -->
                <tr>                          <!-- third row -->
                    <td><?php

                        echo $row['item'] . "<br>";
                        ?></td>
                    <td>
                        <?php
                        echo date ("d.m.y, H:m:sa");
                        ?>
                    </td>


                </tr>


            <!-- end third row -->

            <?php } ?>

            </table>
            <?php

    } else {
        echo $db->error;
    }
    }
?>

<form action = "HW 8.php"
      method = "POST">

<input type="text" name="todo">
<input type="submit" name="submit">
</form>

<?php
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