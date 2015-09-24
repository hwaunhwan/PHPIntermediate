<?php
function IncrementBigNum($bigNumString)
{
    $lastIndex = strlen($bigNumString) - 1;

    if($bigNumString[$lastIndex] != 9)
    {
        $numberToIncrement = CharToInt($bigNumString[$lastIndex]);
        ++$numberToIncrement;

        $bigNumString[$lastIndex] = IntToChar($numberToIncrement);
    }

    else if(CheckForAllNines($bigNumString))
    {
        for($r = 0; $r < ($lastIndex + 1); $r++)
        {
            $bigNumString[$r] = "0";
        }


        $bigNumString ="1".$bigNumString;
    }

    else
    {
        $indexFirstNonNine = GetFirstNonNine($bigNumString);

        $numberToIncrement = CharToInt($bigNumString[$indexFirstNonNine]);
        ++$numberToIncrement;

        $bigNumString[$indexFirstNonNine] = IntToChar($numberToIncrement);

        for($d = ($indexFirstNonNine + 1); $d < ($lastIndex + 1); $d++)
        {
            $bigNumString[$d] = "0";
        }
    }

    echo "Result: ".$bigNumString."\n";

}

//gets the index of the first non 9 value from the left in the number
function GetFirstNonNine($bigNumString)
{
    $lastIndex = strlen($bigNumString) - 1;

    for($i = $lastIndex; $i >= 0; $i--)
    {
        if($bigNumString[$i] != 9)
        {
            return $i;
        }
    }
}
//check if every number in the big number string is a nine
function CheckForAllNines($bigNumString)
{
    $lastIndex = strlen($bigNumString) - 1;

    for($q = $lastIndex; $q >= 0; $q--)
    {
        if($bigNumString[$q] != 9)
        {
            return false;
        }
    }

    return true;
}

function CharToInt($someChar)
{
    return ((int)$someChar);
}

function IntToChar($someInt)
{
    return strval($someInt);
}

IncrementBigNum("129129");
?>