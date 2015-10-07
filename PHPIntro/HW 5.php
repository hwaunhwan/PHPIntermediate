

<?php
function stringTimes($str, $times) {
    $strtime = "";
    for ($i=0; $i<$times; $i++) {
    $strtime = "$str "."$strtime";
    }
    return $strtime;
}
echo stringTimes ('hi',5) . "<br>";
echo stringTimes ('Simon', 6) . "<br>";
echo stringTimes (3,4). "<br>";
echo stringTimes ('blargle', 3) . "<br>";
?>

<br>

<?php
function letterCount($str, $letter) {
    $lcount = 0;
    for ($a = 0; $a < strlen($str); $a++) {
        if ($str[$a]==$letter) {
            $lcount += 1;// or just put $lcount++
            }
        }
    return $lcount;
}
echo letterCount ('Simon Kim', 'i'). "<br>";
echo letterCount ('Mississippi','s'). "<br>";
?>

<br>

<?php

function has456($array){
    for ($i = 0; $i < count($array)-2; $i++) {
        if ($array[$i] == 4 && $array[$i+1]==5 && $array[$i+2]==6) {
            return "true"."<br>";
        }
    }
    return "false"."<br>";//put it here instead of curly brackets to make sure for loop runs completely
}
echo has456(array (0, 4, 5, 6, 4));
echo has456(array (0, 1, 2, 5));
?>

<br>


<?php
function speedingTicket($speed, $limit)
{
    $diff = $speed - $limit;
    if ($diff <= 10) {
        return "$". 0;
    }
    else if ($diff >= 11 && $diff <= 15) {
        return "$" . (50 + $diff * 2);
    }
    else if ($diff >= 16 && $diff <= 20) {
        return "$" . (75 + $diff * 3);
    }
    else if ($diff >= 21) {
        return "$" . (150 + $diff * 5);
    }
}

echo speedingTicket(40,10)."<br>";
echo speedingTicket(40,30)."<br>";
echo speedingTicket(40,20)."<br>";
echo speedingTicket(40,25)."<br>";
?>

