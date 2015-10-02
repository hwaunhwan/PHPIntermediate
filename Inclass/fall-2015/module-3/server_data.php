<?php

$classMates = array('alex', 'jerry', 'simon', 'samir', 'brian', 'traci', 'jared');

$numClassmates = count($classMates);

$index = rand(0, $numClassmates - 1);

//echo $classMates[$index] . ' ' . date('y-m-d h:i:s');

header('Content-Type: application/json'); //how to modify header that is on developer tool
echo json_encode(
    array(
        'name' => $classMates[$index],
        'time' => date('Y-m-d h:i:s')
    )
);

?>