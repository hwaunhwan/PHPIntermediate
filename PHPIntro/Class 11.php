Class 11 GITHUB
<br>

<?php
//git

//from www.github.com create a repository
//clone it! by copying the http address
//from the commend line
//          git clone http.......
//then the README.MD file has been added to my folder.
//open it on the phpstorm and edit the description
//add the new file by
//          git add README.MD
//Now the file has been added
//Let your coworkers know by leaving a message
//          git commit -m "message"
//Finalize the edit by pushing it
//          git push
//It will ask for you github id and pw
//Check it on the updated README.MD on github.com


//Other useful commend
//git status
//git diff
//man git
/**
 * Created by PhpStorm.
 * User: KSH
 * Date: 7/14/15
 * Time: 6:25 PM
 */

// Class 11 Review Session
?>

<?php
// Austin Coding Academy
// Intro to PHP
// Day 11: Basic Review

// How PHP Works

// A Web server is a piece of software that listens for incoming requests,
// processes the requests, and sends the results (HTML) back to the computer
// that made the request.

// Anatomy of a URL
// http://   www.example.com   /hello.php
// |------|  |--------------|  |--------|
// protocol       host            path

// When you type a URL into your web browser, it initiates a connection to
// the server specified in the "host" part of the URL and asks for the page
// specified in the "path" part of the URL. The request looks something like
// this beind the scenes:

// GET /hello.php HTTP/1.1

// The server first locates the "hello.php" file. Then, it runs the file
// through the PHP processor. This evaluates all of the PHP code in the file
// and replaces anything within PHP tags with the output it produces.

// Finally, the server sends the evaluated result back to the browser, which
// displays it in a window on your screen.

// `echo`
// An echo statement generates output in PHP. It is the basic means by which
// you can dynamically generate text and HTML content.

// echo "hello, world";
// echo "hello, world<br>"; // basic output with HTML
// echo "<p>hello, world</p>"; // basic output with a paragraph

// Note that none of these examples use any computational power - that is,
// they don't depend on any control statements, variables, or loops. You
// could generate the equivalent output by simply typing the HTML straight
// in the file and not even messing with PHP.

// PHP's true power comes about because it can make decisions and generate
// different HTML accordingly.

// 1. Write an echo statement that prints the text of your choice to the
//    browser.
// 2. Write an echo statement that prints some HTML tags, like <p> or <br>

// Variables
// A variable is a slot in the server's memory. Variables can hold data of
// many types. Variables are useful to store the results of a computation
// or to hold temporary data that you will use later.

// Write PHP statements that create variables that hold
//    1. a string
//    2. an integer
//    3. a decimal number (floating-point value, or float for short)
//    4. a Boolean value (true or false)

// Operators
// Arithmetic
//    +  addition
//    -  subtraction
//    *  multiplication
//    /  division
//    %  modulus (remainder from division)
// 1. Write a statement that adds 3 and 7, and then divides the result by 2.
// 2. Write a statement that gets the remainder of 10 divided by 4.
// Concatentation: .
// Joins two values together

// Relational
//    ==     equal to
//    != not equal to
//    >= greater than or equal to
//    <= less than or equal to
//    >  greater than
//    <  less than

// Logical
//    && - AND
//    || - OR
//    !  - NOT


// If statements
// An `if` statement enables your program to make decisions.

// if (condition) {
//      action1;
//      action2;
// }

// Write an if statement that checks if:
//    1. the variable $a is greater than 5
//    2. the variable $b is less than 3 or the variable $c is equal to 3
//    3. the variable $d is not equal to the variable $e, or the variable
//       $age is greater than 65
//    4. either the variable $income is greater than 65,000 or the variable
//       $householdSize is greater than 6, but not both

// Loops

// for (initialization; condition; action) {
//      loop-body;
// }

// Write a `for` loop that:
// 1. counts up from 1 to 10
// 2. counts down from 10 to 2
// 3. counts up from 30 to 60, going by multiples of 3
// 4. counts up from 1 (2^0) to 16,777,216 (2^24) exponentially
// 5. counts down from 65536 to 1 exponentially

?>

?>
