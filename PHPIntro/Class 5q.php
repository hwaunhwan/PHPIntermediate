
<?php
/* More form tags:
- Check boxes
-
Quiz: Make a page with a text field and submit button. When the form is submitted, display the value entered in the field on the page in bold and italic.

*/


?>

<form action="Class 5q.php" method="POST">
    Name:
    <input type="text" name="YourName"><br>
    <input type="submit" name="submit" value="Your name is...">
</form>

<?php

if(isset($_POST['submit'])) {
    echo "<strong><em>$_POST[YourName]</em></strong>";
}
?>

