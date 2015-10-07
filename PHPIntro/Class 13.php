<?php
/**
 * Created by PhpStorm.
 * User: KSH
 * Date: 7/21/15
 * Time: 6:32 PM

Given two arrays, each of length 2, wirte function combine arrays ($first, $second)
that returns a new array of legnth 4 containing the ties from both input arrays

*/

function combine_arrays ($first, $second) {
    return array($first[0], $first[1], $second[0], $second[1]);
}

$first = array(0,1);
$second = array (2,3);

print_r (combine_arrays($first, $second));
echo "<br>";
?>

<?php

// Homework:
// Use casting to write a program that determines whether the user entered a valid
// nonzero integer.
//    1. Create a form that allows the user to input a number.
//    2. Cast to int
//    3. See if it's non-zero - if so, the number is valid.

if(isset($_GET['submit'])){
    $num = (int) $_GET['number'];
    if ($num == 0) {
        echo "not valid";}
        else echo "valid";
}

?>

<form action="class 13.php" method = "GET">
    <input type="text" name="number">
    <input type="submit" name="submit">

 <?php
//Github

//repository is a folder that you saves your project
//commit = one unit of your project including all your add's
/*
git checkout -b simon ===== to make new branch called simon

on terminal you can create a new file by using echo command
            echo "whatever text" > simon_file.php
 git push origin yourbranch
going back to master branch

    git checkout master
    git pull  ===== to show everybody's request changed
?>