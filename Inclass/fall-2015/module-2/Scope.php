<?php
$outsideFunction = "outside";

function TestFunction() //can't use outsideFunciton here because it's a new function
{
$insideFunction = "inside";
echo "outside: ".$outsideFunction;
echo "inside: ".$insideFunction;
}

TestFunction();

?>