
<?php
/*
Quiz
Write 'function doubleEveryCharacter($str)". This function should accept a string
and return a string with each character repeated twice.

*/

?>

<?php
function doubleEveryCharacter($str) {
    $doubled = "";
    $len = strlen($str);

    for ($k = 0; $k < $len; $k++) {
        $doubled = $doubled.$str[$k].$str[$k];
    }
    return $doubled;
}
$j = "hi";
echo doubleEveryCharacter($j);

?>

