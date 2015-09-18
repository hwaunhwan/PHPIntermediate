<?php

$name = 'Simon';
$simpleString = 'My name is $name\n';
$complexstring = "My name is $name";

echo $complexstring."<br/>";
echo $simpleString."<br/>"; // will not show the value of $name

$complex = "My name is $name\"";

echo $complex;


