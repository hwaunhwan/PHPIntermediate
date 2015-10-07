<?php
/**
 * Created by PhpStorm.
 * User: KSH
 * Date: 7/16/15
 * Time: 6:29 PM
 */

//Quiz: Write function array_front9($nums) that returns 'true' if one of the first
//four numbers in the array is 9, and 'false' otherwise

function array_front9($nums) {
    for ($k=0; $k<4; $k++){
        if ($nums[$k] == 9){
            return 'true';
        }
    } return 'false';
}
$nums = array(0,0,0,0,9);
$num = array(0,0,9,9);
$n = array (0,9);
echo array_front9 ($nums)."<br>";
echo array_front9 ($num)."<br>";
echo array_front9 ($n)."<br>";
?>

<?php
//Matt's answer

function front9($numb) {
    for($a=0; $a<4; $a++){
        if ($a<count($numb)
            && $numb[$a]==9)
            return "true";
    }
    return "false"; //put this outside the loop to test out the whole loop first
}

$result = front9(array(9,0,0,0));
echo $result."<br>";



//Review Session 2


//while loop
//   while (condition) {
//       loop-body;
//   }

$k = 0;
while ($k < 10) {
    echo "$k<br>";
    $k++; // if it was $k-- it will be an infinite loop that never ends counting backward (maximum number is 2 billion)
}



// 1. Counts from 10 to 20 using <=
$k = 10;
while ($k <= 20) {
    echo "$k<br>";
    $k++;
}

// 2. Counts from 10 to 19 using <
$k = 10;
while ($k < 20) {
    echo "$k<br>";
    $k++;
}

// 3. counts backwards from 101 to 80, skipping 2 each time (counting by 3)
$k = 101;
while ($k >= 80) {
    echo "$k<br>";
    $k = $k - 3;
}

// 4. Displays the letters from 'a' to 'z'
// (hint: the 'ord' function converts from a letter to its corresponding number
// and the 'chr' function converts from a number to its corresponding letter

$k = ord("a");
//97 represent a in chr function
while ($k <= ord("z")) {
    echo chr($k)."<br>";
    $k++;
}


// Do While (This will at least run the while loop at least once


$j = 0;
do {
    $j++;
    echo "$j<br>";
} while ($j < 10);

// do {
//   loop-body;
//   while (condition);

//   'break;' and 'continue;'

for ($k = 0; $k <10; $k++) {
    echo $k."<br>";
    if ($k >5) break; //the loop will stop after 5
}


for ($k = 0; $k <10; $k++) {
    if ($k == 0) continue; //the loop will skip 0 and start from 1
}


// 1. Write a for loop that tries to count from 0 to 10 but jumps out of the loop after it prints 5

for ($k = 0; $k <=10; $k++) {
    echo $k."<br>";
    if ($k >= 5) break; //the loop will stop after 5
}

// 2. Write a while loop that should run infinitely ('while (true) {....}'), but add a break statement so that it does not

$k = 0;
while ($k<10) {
    echo "$k<br>";
    $k--;
    if ($k < -5) break;
}

// 3. Write a for loop that prints the multiples of 5 from 0 to 100, except 25 using continue

for ($k = 0; $k <= 100; $k = $k+5) {
    if ($k==25) continue;
    echo "$k<br>";
}


