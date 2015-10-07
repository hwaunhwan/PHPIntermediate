<?php

$db = new mysqli("ribbit.ccoefbt2lfct.us-east-1.rds.amazonaws.com","student","austincoding","ribbit");
if ($db->connect_errno){
    echo "Failed to connect to MySQL :( <br>";
    exit();
}

?>