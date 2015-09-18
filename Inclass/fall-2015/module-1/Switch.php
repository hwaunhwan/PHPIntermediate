<?php

#####################################
###########SWITCH CODE###############
#####################################
$statusCode = 500;

if ($statusCode == 500) {
    echo 'Internal Server Error';
}elseif ($statusCode == 301) {
    echo 'Redirect';
} elseif ($statusCode == 200) {
    echo 'Everything is cool';
} else {                        //final else.... if none of above works...
    echo 'I have no idea';
}

//Same thing using switch code
echo '<hr/>';


switch ($statusCode) {
    case 500:
        echo 'Internal Server Error';
        break;

    case 301:
        echo 'Redirect';
        break;

    case 200:
        echo 'Everything is cool';
        break;

    default:
        echo 'I have no idea';
}