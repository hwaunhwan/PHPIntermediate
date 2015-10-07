

<?php
//The squirrels around the UT campus are almost always running around
//They play if the temperature is within 65 and 85 degrees, inclusive.
//However, if it's the summer, the upper temperature limit is 95 instead of 85
//Write function will_squirrels_play($temp, $summer) that returns 'true'
//if the squirrels will be out playing given the conditions, or 'false' otherwise
//$temp is the temperature and $summer is 'true' if it is summer


function will_squirrels_play($temp, $summer)
{ $temp="";
    if (!$summer) { //!$summer means if $summer is false... I used ($summer == false)
        if ($temp >= 65 || $temp <= 85) {
            return 'true';
        }
    } elseif ($summer) { //$summer = means if $summer is true... I used ($summer = true)
        if ($temp >= 65 || $temp <= 95) {
            return 'false';
        }
    }
}
echo will_squirrels_play(90,true)."<br>";
echo will_squirrels_play(90,false)."<br>";
echo will_squirrels_play(65,false)."<br>";


/*
Matt's answer
function will_squirrels_play($temp, $summer) {
    if($summer){
        if($temp >= 65 && $temp<= 95) {
            return 'true';
            } else {
        return 'false';
        }
    } else {
       if($temp >= 65 && $temp<= 85) {
        return 'true';
    } else {
        return 'false';
    }
}
}


shorter answer
if ($summer && $temp >= 65 && $temp <=95{
return 'true';
} else if (!$summer && $temp >=65 && $temp <=85{
return 'true';
}
return 'false';



! means 'not'... used with variables !$k = is not k
!= means not equal to

*/

?>

