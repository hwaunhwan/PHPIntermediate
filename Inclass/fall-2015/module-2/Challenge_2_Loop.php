<?php

function IsPalindrome($str)
{
    $str = str_replace(' ', '', $str);
    $str = str_replace('.', '', $str);
    $str = strtolower($str);

    $str_array = str_split($str);

    $reverse = '';
    for ($i = count($str_array)-1; $i >= 0; $i--)
    {
        $reverse = $reverse.$str_array[$i];
    }

    if ($str == $reverse)
    {
        echo "$str is a palindrome";
    } else
    {
        echo "$str is not a palindrome";
    }
}

$str = 'Race car';

IsPalindrome($str);
echo "<br/>";
IsPalindrome('Kayak');
echo "<br/>";

$string = 'Too hot to hoot.';
IsPalindrome($string);

//Question 1: Special character replacement function?
//Question 2: $str is showing replaced version. How to show the original value? ---- by giving new var
?>