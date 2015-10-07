<?php
/**
 * Created by PhpStorm.
 * User: KSH
 * Date: 7/30/15
 * Time: 6:45 PM
 */
//quiz Write a program that generates the following shape:

//  *
//  **
//  ***
//  ****
//  *****

//hint: 1. <pre></pre> HTML tag creates preformatted output
//      2. \n to make a new light i.e echo "\n"
//      3. use 2 for loops

echo "<pre>";
$a = '';
for ($i=0; $i<5; $i++){
    echo "\n";
    for ($k=0; $k<1; $k++) { //use it $k<1 since $i will run it five times
        echo $a = $a."*";
    }
}
echo "</pre>";

// \n is used with <pre> to make similar effect to <br>

?>


Matt's anwser
<pre>
<?php
for ($i=1; $i<=5; $i++){
    for ($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "\n";
}
?>
    </pre>


Linebreaks

<br>
<br>
<?php
echo "line1\n\nline3\n"; //w/o <pre> \n will have no effect on front end

echo "line4<br><br>line6";
?>
<br>
<br>
hello
world
how       are you
<br>

<pre>
hello
world
how       are you
</pre>


<pre>
<?php
echo "line1\n\nline3\n"; //w/o <pre> \n will have no effect on front end

echo "line4<br><br>line6";
?>
    </pre>
