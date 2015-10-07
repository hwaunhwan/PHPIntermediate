

<?php
include 'My Functions.php';// you can copy funcitons from other php files
// There's also a funciton called require_once(file.php);
// This will let you avoid your $variables getting mixed up or duplicated
// So just use require_once rather than include

function leetify ($leet)
{
    for ($k = 0; $k < strlen($leet); $k++) {

        if ($leet[$k] == "i" || $leet[$k] == "l") { //|| is or && is and
            $leet[$k] = "1";
        }

        if ($leet[$k] == "o") {
            $leet[$k] = "0";
        }

        if ($leet[$k] == "e") {
            $leet[$k] = "3";
        }

        if ($leet[$k] == "t") {
            $leet[$k] = "7";
        }
    }
    return $leet;
}

$result = "";
if (isset($_POST['submit'])) {
    $contents = htmlspecialchars($_POST['text']);//protection from html coding input on the text box
    $result = leetify($contents);
}
// PHP has a function called INCLUDE that allows you to use your own function from a php file to all other php files
$result2 = "";
if (isset($_POST['submitit'])) {
    $content = htmlspecialchars($_POST['number']);//protection from html coding input on the text box
    $result2 = cube($content);
}
?>

<h1>THE LEETIFICATOR</h1>

<p>Enter some text that you would like to convert to <s>hacker-speak</s> h4x0r-sp33k.</p>


<form action="Class 5 activity.php" method="POST">
    <input type="text" name="text">
    <input type="submit" name="submit"><br>
</form><br><br>

    <p><strong>Result</strong>: <?php echo $result; ?> </p>
<br>

<h1>CUBE</h1>

<p>Enter some number that you want to cube.</p>
<form action="Class 5 activity.php" method="POST">

<input type="text" name="number">
<input type="submit" name="submitit">
</form>
    <p><strong>Result</strong>: <?php echo $result2; ?> </p>
