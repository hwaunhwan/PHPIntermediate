<?php

$db = new mysqli("localhost","root","root","blog");
if ($db->connect_errno){
    echo "Failed to connect to MySQL :( <br>";
    exit();
}

?>
