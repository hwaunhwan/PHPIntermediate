
<?php
/*
Quiz
Write 'function combinestrings($a, $b)' that accepts 2 strings $a and $b and
returns a combined string wth a copy of the shorter string on either side and the
longer string on the inside between them.

For example, combineString ('hi', 'world') should return "hiworldhi".

*/
function combineStrings($a, $b) {
    $k = strlen ($a);
    $j = strlen ($b);

    if ($k < $j) {return $a.$b.$a;}
else {return $b.$a.$b;}// if two strings has same length, it will run 'else'
}
echo combineStrings('hi', 'world')."<br>";
echo combineStrings('world','hi');

/*Matt's version

function combineStrings($a,$b) {
if (strlen($a) > strlen ($b)) {
echo $b.$a.$b;
}
else {$a.$b.$a;
    }
}
 *
 */
?>