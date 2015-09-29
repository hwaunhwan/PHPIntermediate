<?php


$string = "The wather
is just awesome
today";

echo str_replace("\n", ".__.",$string);
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo str_replace("\\n", ".__.",$string);



//heredoc syntax
$class = <<<FOO //start of a string

FOO;//end of string


?>
