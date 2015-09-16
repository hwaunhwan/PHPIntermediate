<?php

//phpinfo();

//command key + click over function
echo 'This is PHP code!';

//$var = 'foo';
//command + d = duplicate
//command + / = make it a comment

/* makes multi-line comments
 *
 */


?>

    This is not PHP code, just plan old text.

<?php
/**
 *
 * This is known as standard doc-block notation
 * check out phpdocumentor.com for more info
 *
 *
 * @param string $name First name only
 * @param int $age Age as a number only
 * @return int
 */
function foo($name, $age)
{
    return 12;
}
// do /** docblock above function to make signature
//command + option + L    or menu (code) => reformat code
echo "<br/>";

echo 'I am here';
echo "\n"; //will only show on view-source
echo 'So am i';




?>