<?php
$Car = array ("Toyota","Hyundai",'Honda', "BMW", "VW", "Nissan", "Chevy", "Ford", "Jeep", "Saab");

for($k = 0; $k < 10; $k++) {$Car[]=rand(1,10);}
for($k = 0; $k < 10; $k++) {
echo "$Car[$k]<br>";}


?>

<?php //terminal commands
/* On Terminal 'cd' to move around from folders, 'ls' to show all the files (same as "dir"), 'pwd' to show your current folder */
/* ls -l = more detailed list, ls -a = shows hidden file, you can combine the two by -al
/* to create a new file use 'touch' (touch my_new_file)
/* copy = cp, move = mv
/* to rename, use 'mv oldname newname' */
/* to remove, use 'rm filename' */
/* to create a folder 'mkdir foldername', to remove a folder 'rmdir foldername' (only empty folder will be deleted*/
/* "rm -r foldername" will delete a folder with files inside */
/* two ways to make a folder with long names 'mkdir "folder with a space"' or 'mkdir folder\ with\ a\ space2' */
/* if you want to know about different commands use 'man' = ie. man ls (to quit press q)
//to search, "find" and specify the folder you want to search (find . or find /users/KSH/Desktop)
// find . -name "Index.php"
// grep -i "myArray" *
// pipe
// vi filename
// cat filename
// cat filename | grep "word that you want to search"
check Matt's email for command line resources */

?>

<h1>Class 3 - Functions</h1>

<?php
// $var = rand(1,10); will use rand funciton to give values to $var
//check out php.net's function page
// strtolower, strtoupper, strlen, trim

$myTestString = "     H3llo ThIs IS A st4rING   ";

echo strtoupper ($myTestString) . "<br>"; // on the webpage it will not show the extra spaces. It will be shown on source page
echo strtolower ($myTestString) . "<br>";
echo strlen ($myTestString) . "<br>";
echo trim ($myTestString) . "<br>";
echo $myTestString . "<br>";

$uppercaseString = strtoupper ($myTestString);
echo $uppercaseString;

?>
<p>
<?php

$nums = array(6, 3, 10, -5, -8, 100, 0);
sort($nums); // it does the sorting small to large
print_r($nums); //it will show sorted list
?>
</p>

<br>
<h2>Make your own functions</h2>
<br>
<?php
function sayHi ($person){//you can give more than one attributes like age, race etc
    echo "Hello, $person! How are you?<br>";
}

sayHi("Matt");
sayHi("Simon");
sayHi("JK");
sayHi("John");
sayHi("Sarah");

?>

<br>
<?php //return
function sayBye ($person){
    return "Bye, $person! <br>";
}

sayBye("1"); // doesn't show it online because it just used "return"
echo sayBye ("2");


?>

<br>
<h2>Quiz</h2> //these things will be on the job interviews!!!!<br>

Write a funciton that accepts a number and retuns the string "even" if the number is even and "odd" otherwise.
<br>
<?php
function oddeven ($num) {
    if ($num % 2 ==0) {
        return "Even";
    } else {
        return "odd";
    }
}
echo oddeven (50) . "<br>";
echo oddeven (51);

?>
<br>
On Internet forums, sometimes people try to act tough by replacing letters with numbers. We call this "1337 speak" or "leet speak", short for "elite".


People usually make the following
"1" instead of "i" or "l"
"0" instead of "o"
"3" instead of "e"
"7" instead of "t"

write a function that accepts a string and returns it converted into its "leet speak" equivalent
<br>
<p>
<?php

function autocorrect ($leet) {
    for ($k = 0; $k < strlen($leet); $k++) {

        if ($leet[$k] == "i" || $leet[$k] == "l") { //|| is or && is and
            $leet[$k] = "1";
        }

        if ($leet[$k] == "o") {
            $leet[$k] = "0";
        }

        if ($leet[$k] == "e") {
            $leet[$k] = "3";
        }

        if ($leet[$k] == "t") {
            $leet[$k] = "7";
        }
    }
    return $leet;
}
echo autocorrect ("hi, world");
echo '<br>';
echo autocorrect ("isn't this cool or what");


?>
</p>



    <br>
    Write a function that reverses a string

<?php
$strstr = "hello";


function rev ($strstr)
{   $new = "";
    for ($x = strlen($strstr)-1; $x >= 0; $x--) {

        $new = $new . $strstr[$x];
    }
    return $new ;
}
echo rev ($strstr);

?>