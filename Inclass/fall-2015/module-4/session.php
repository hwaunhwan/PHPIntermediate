<?php

//What is a session?
//A session will create a cookie locally, which will get sent to the server on every HTTP request

//Starting the session
session_start();




//$_SESSION['name']='Simon';
$_SESSION['location']='Austin';
//Deleting the avoid line will still show Simon because of the cookie

print_r($_SESSION);
//$_Session is an array


echo 'You should have a cookie';
//you can check developer tool -> resources -> cookies -> PHPSESSID

//Will create session_2.php and it $_SESSION will still show this file's code