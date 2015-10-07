<style>
    body {
        background-image: url(bg.jpg);
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    h1 {
        color: white
    }

    p {
        color: white
    }

    table {
        color: white;
        width: 60%;
        height: 20%;
        text-align: center
    }

    th, td {
        border: 2px solid white;
    }
</style>
<a href="edit_post.php">
    <img src="blog.jpg" alt="Home" style="width:128px;height:128px;">
</a>
<?php
require_once("db_info.php");

if (isset($_POST['delete'])) {
    $stmt = $db->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param('i', $_POST['id']);
    $stmt->execute();
}

if (isset($_GET['cool'])) {
    // set up the SELECT query
    //bind_param
    //execute
    //when you get to this point it changes so we'll talk more
    if (strlen($_GET['searchBox']) <= 1)
        echo "<h1>Please enter at least two characters</h1>";
    else {
        $sql = "SELECT title,author, date, contents FROM posts WHERE
          title LIKE ?
          OR author LIKE ?
          OR date LIKE ?
          OR contents LIKE ?";
        $search_term = "%" . $_GET['searchBox'] . "%";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssss", $search_term, $search_term, $search_term, $search_term);
        $stmt->execute();
        $stmt->bind_result($title, $author, $date, $contents);// these variables are independent from edit_post.php
        echo "<h1>Search Results...</h1>";
        echo "<table>";
        echo "<tr><td><strong>TITLE</strong></td><td><strong>AUTHOR</strong></td><td><strong>DATE</strong></td><td><strong>CONTENTS</strong></td></tr>";
        while ($stmt->fetch()) { //stops until you can't find anymore
            echo "<tr><td>$title</td>";
            echo "<td>$author</td>";
            echo "<td>$date</td>";
            echo "<td>$contents</td></tr>";
        }
        echo "</table><br>";
    }
} else {

    echo "<h1 style='display:inline'>Blog Postings</h1>";
    echo "<br>";
    echo "<br>";

    $sql = "SELECT * FROM posts";
    $result = $db->query($sql);

    echo "<table>";
    echo "<tr>
            <td><strong>TITLE</strong></td>
            <td><strong>AUTHOR</strong></td>
            <td><strong>DATE</strong></td>
            <td><strong>CONTENTS</strong></td>
            <td><strong>EDIT</strong></td>
            <td><strong>DELETE</strong></td>
            </tr>";
    foreach ($result as $row) {
        echo "<tr>
            <td>$row[title]</td>
            <td>$row[author]</td>
            <td>$row[date]</td>
            <td>$row[contents]</td>
            <td><a href='edit_post.php?id=$row[id]'>Edit</a></td>
            <td><form action='index.php' method='POST' onsubmit=\"return confirm('Would you like to delete the post?');\"><input type = 'hidden' name = 'id' value = '$row[id]'><input type='submit' name='delete' value='delete'></form></td>
            </tr>";//write address after.php starting with ?
    }
    echo "</table>\n";

}

//for SEARCH
// "SELECT * FROM posts WHERE contents LIKE '% ~~~~~~ %'"
?>
<br>
<h1>Search Postings</h1>
<br>
<form action="index.php" method="GET">
    <input type="text" name="searchBox" placeholder="Search">
    <input type="submit" name="cool" value="Go"/>
</form>

<?php
/* Edit post: actually saving the edited contents.

INSERT INTO posts (title, author, date, contents) VALUES (?,?,?,?)
On DUPLICATE KEY UPDATE title = VALUES(title), author = VALUES(author), contents = VALUES(contents);
*/
?>



