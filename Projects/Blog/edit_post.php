<style>
    body {
        background-image: url(bg.jpg);
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    h1 {
        color:white
    }
</style>

<body>

<table width="1000">


<?php
require_once ("db_info.php");


$title = '';
$author = '';
$contents = 'Write your post!';
$id = 'NULL';

if(isset($_GET['id'])){ //selecting the edit link next to the table
    $id = $_GET['id'];
    $sql = "SELECT title,author, date, contents FROM posts WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $stmt->bind_result($title, $author, $date, $contents);
    $stmt->fetch();
    $stmt->close();
}

?>
    <td>
<h1>What's on your mind today?</h1>
<br>
<br>

<form action = "edit_post.php"
      method = "POST">
    <input type="text" name="title" size="82" placeholder="Title your post." value="<?php echo $title ?>"><br><br>
    <input type="text" name="author" size="82" placeholder="Who are you?" value="<?php echo $author ?>"><br><br>
    <textarea name="contents" rows="25" cols="80" onclick="this.value=''"><?php echo $contents ?></textarea><br><br>
    <input type="submit" name="submit" value="Add Post!"><br><br>
    <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
</form>

<?php
if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $contents = $_POST['contents'];
    $id = $_POST['id'];

    $error = "";

    if ($title == '') {
        $error .= "Please enter a title for your post.<br>";
    if ($author == '')
        $error .="Please enter your name.<br>";}
    if ($contents == 'Write something!' || ''){
        $error .="Please enter a blog post.<br>"; //.= adds the error to the next line
    }
    // if ANYTHING set an error, don't insert the post
    if ($error !="") {
// just print out the error and don't make the post.
    echo $error;
    } else {
        if($_POST['id'] === 'NULL'){// now it's POST since it's under POST form //it's a new post
            $stmt = $db->prepare("INSERT INTO posts (title, author, date, contents) VALUES (?,?,NOW(),?)");
            echo $db->error;
            $stmt->bind_param("sss", $title, $author, $contents);
            $stmt->execute();
            header ('Location: index.php');
        } else {//editing post
            $stmt = $db->prepare("UPDATE posts SET title = ?, author = ?, contents = ? WHERE id = ?");
            echo $db->error;
            $stmt->bind_param("sssi", $title, $author, $contents, $id);
            //bind_param("ss"..... if you want to use php function date()
            $stmt->execute();
            header ('Location: index.php');
        }
        //we are good to go
        //$stmt = $db->prepare("INSERT INTO posts (title, author, date, contents) VALUES (?,?,NOW(),?)");
        //echo $db->error;// to check if there is any error
        //$stmt->bind_param("sss", $title, $author, $contents);
        //bind_param("ss"..... if you want to use php function date()
        //$stmt->execute();
        //header ('Location: index.php');//redirect to new file
    }

}
?>
    </td>

    <td>
    </td>

    <td>
        <br>
        <h1>Blog Postings</h1>
        <?php


echo "<br>";

$sql = "SELECT * FROM posts";
$result = $db->query($sql);
echo $db->error;
foreach ($result as $row) {
    echo "<pre>";
    echo "Title:     $row[title]<br>Author:    $row[author]<br>Date:      $row[date]<br>Contents:  $row[contents]<br><br><br></pre>";
}?>
    </td>
</table>
</body>