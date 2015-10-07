<?php
function upper ($i) {echo strtoupper ("$i");}
upper ("hi<br>");
upper ("my name is simon<br>");
upper ("all caps<br>");
?>

<p>
<?php
function avg ($i) {
    $count = count ($i);
    $total = array_sum ($i);
    $avg = ($total/$count);
    echo $avg . '<br>';
}
$j = array (10, 20, 30);
avg ($j);


$b = array (1,2,3);
avg ($b);


$a = array (1,2,3,4,5,6,7,8,9,10);
avg ($a);

?>

</p>

<p>
<?php
function novowels ($sentence) {
    for($i = 0; $i < strlen($sentence); $i++) {
        $k = $sentence[$i];

        if($k == "a"){
            $sentence[$i] = " ";
        }
        if($k == "e"){
            $sentence[$i] = " ";
        }
        if($k == "i"){
            $sentence[$i] = " ";
        }
        if($k == "o"){
            $sentence[$i] = " ";
        }
        if($k == "u"){
            $sentence[$i] = " ";
        }
    }
    return $sentence;
}
echo novowels ("Hi, my name is Simon<br>");
echo novowels ("There are no vowles in this<br>");
echo novowels ("Find vowels<br>");
?>
</p>

<p>
    <?php
/* 4. Write a function that accepts an array and a string as parameters. The function should

return true if the array contains the given string and false if not. For example:

$cities = array("Austin", "Houston", "San Antonio");

echo myContains($cities, "Austin") // prints 'true'

echo myContains($cities, "Dallas") // prints 'false'
*/
    $cities = array ("Austin", "Houston", "San Antonio");
function mycity ($cities) {
    if ($cities == "Austin") {
                return "true";}
    if ($cities == "Houston") {
            return "true";}
    if ($cities == "San Antonio") {
        return "true";}
    else {
    return "false";
    }
}
    echo mycity ("Austin").'<br>';
    echo mycity ("Seoul").'<br>';
    echo mycity ("Houston").'<br>';

?>

<?php

/* 5. This one does not need to use functions. Write a program that prints the numbers from 1

to 100, except:

- for multiples of 3, print "fizz" instead of the number

- for multiples of 5, print "buzz" instead of the number

- for multiples of 3 AND 5, print "fizzbuzz" instead of the number

For example, the output of your code should start: 1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14

fizzbuzz .........
*/

$k = 0;

while ($k <= 100) {
    $k = $k + 1;
    if ($k % 15 == 0) {
        echo "fizzbuzz <br>";
    }
    if ($k % 3 == 0) {
        echo "fizz <br>";
    }
    if ($k % 5 == 0) {
        echo "buzz <br>";
    }
    if ($k % 5 != 0 && $k % 3 != 0 && $k % 15 !=0) {
        echo $k . '<br>';
    }
}
?>

</p>

HW 3 Answers
    Homework 3
<br>
1. Write a function that accepts a string, changes every other character to uppercase, and

    returns the modified string.



<?php
function weird_upper ($str)
{
    for ($k = 0; $k < strlen($str); $k += 2) {
        //after for (starting point, end point, task each time)
        //for loop does 1. Runds code in loop 2. update counter variables 3. Check if we should continue
        $str[$k] = strtoupper($str[$k]);
    }
    return $str;
}
?>
<br>
2. Write a function that accepts an array as a parameter and returns the average of all the

    numbers in the array.
<?php
function avg ($arr){
    return array_sum($arr)/count($arr);
}
?>


3. Write a function that removes all of the vowels from a string.

<?php
function noVowls ($str) {
    for($k=0;$k<strlen($str);$k++) {
        if($str[$k] == 'a' || $str[$k] == 'A') {// do it for e, i, o, u
            $str[$k] = ""
        }
    }
    return $str;
}

?>
4. Write a function that accepts an array and a string as parameters. The function should

    return true if the array contains the given string and false if not. For example:

    $cities = array("Austin", "Houston", "San Antonio");

    echo myContains($cities, "Austin") // prints 'true'

    echo myContains($cities, "Dallas") // prints 'false'

<?php
function contains($arr, $str) {
    for ($k = 0; $k < count($arr); $k++) {
if ($arr[$k]==$str){
    return true;//return statements ends the loop
        }
    }
    return false;
}



?>
5. This one does not need to use functions. Write a program that prints the numbers from 1

    to 100, except:

    - for multiples of 3, print "fizz" instead of the number

    - for multiples of 5, print "buzz" instead of the number

    - for multiples of 3 AND 5, print "fizzbuzz" instead of the number

    For example, the output of your code should start: 1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14

    fizzbuzz .........

<?php //Good interview question
for ($k=1 ; $k <= 100; $k++) {
    $out = ""; //$out is an empty string now
    if ($k % 3 == 0) $out .= 'fizz'; //for one if, you can skip curly brackets
    if ($k % 5 == 0) $out .= 'buzz';
    if ($out == "") echo $k;
    else echo $out;
}
?>

or use elseif

<?php //elseif stops at first correct condition. If structures keep go on
for($k =1; $k <=100; $k++) {
    if($k %3 == 0 && $k % 5 == 0) {
        echo 'fizzbuzz';
    } else if($k %3 == 0) {
        echo 'fizz';
    }
    else if ($k%5==0) {
        echo 'buzz';
    }
     else {echo $k;
}
}
?>
