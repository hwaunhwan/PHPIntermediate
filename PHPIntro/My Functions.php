

<?php
//function hw answers
function cube($num) {
    return $num*$num*$num;
}


function power($num,$to) {
    $result = 1;
    for ($k=0; $k<$to; $k++)
        $result = $result*$num;
    return $result;
}

function pRG($person) {
    $greetings = array ("hi ", "hello ", "hola ");
    $index = rand(0, count($greetings)-1);
    $myGreeting=$greetings[$index];
    echo $myGreeting. $person;
}

?>

