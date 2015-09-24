<?php

//Create a function IsPalindrum($str) to see if it's true or false
//Use arrays!!!
//String is a arrays of characters
//i.e racecar
// r = $i[0] etc.

function IsPalindrome($str)
{
   $str = str_replace(' ','',$str);
    if ($str == strrev($str))
    {
        echo "$str is a palindrome";
    } else
    {
        echo "$str is not a palindrome";
    }
}

$str = 'race car';

IsPalindrome($str);

?>
