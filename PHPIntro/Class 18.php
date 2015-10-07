<h1>
<?php
/*
create the following shape:

*
**
***
****
*****
******
*******
********
*********
**********

*/
for ($i=1; $i<=10; $i++){
    for ($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}
?></h1>

<?php
/* Edit post: actually saving the edited contents.

INSERT INTO posts (title, author, date, contents) VALUES (?,?,?,?)
On DUPLICATE KEY UPDATE title = VALUES(title), author = VALUES(author), contents = VALUES(contents);



?>