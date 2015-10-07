<?php
/**
 * Created by PhpStorm.
 * User: KSH
 * Date: 7/16/15
 * Time: 5:38 PM
 */


//1. Write a for loop that counts by twos from 11 to 67.

for ($k=11; $k <= 67; $k=$k+2){
    echo $k."<br>";
}
//2. Write a for loop that counts from 1 (3^0) to 81 (3^4) exponentially.

for ($k = 1; $k <= 81; $k=$k*3) {
    echo $k . "<br>";
}
//3. Write a for loop that counts backwards from 180 to 90.
for ($k = 180; $k >= 90; $k--){//or $k=$k-1 or $k -= 1 instead of $k--
    echo $k . "<br>";
}
//4. Write if statements that implement the following conditions:
//      a. $gpa is greater than 3.0 or $time is less than 6
if ($gpa>3.0||$time<6){
    //echo ....
}
//      b. $a is true or $b and $c are both true, or both
if (($a == true)||($b == true && $c == true)) {
}
// if ($a||$b && $c) {}
// //this also works because writing variable will test and check true if it has contents

//      c. $a is not true and $b is not true
if ($a == false && $b == false){}
//or (!$a && !$b){}
//or $a != true
//or !($a==true)


//      d. not ( $a is true or $b is true)

if !($a == true || $b == true){}
//or if !($a||$b){}

//(c and d are same statements - can you tell why?)
// both c and d says not a and not b



phpinfo();//shows the version of php


?>
