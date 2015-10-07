
This is some <strong>bold</strong> text.
<br>
This is some <em>italic</em> text<br>

<?php
echo 'Hi.';
echo '<br>';
echo 'My name is Simon.';
?>
<h1>Some more HTML!</h1>
<h2>Smaller...</h2>
<h6>The smallest</h6>

<p>This is a paragraph</p>

<?php
$my_text = 'a string';
echo $my_text;

$my_num = 5;
echo '<br>'.$my_num . '<br>';

// operators that can be used with if:
// < less than
// > greater than
// <= less than or eq
// >= greater than or eq
// == equals
// != does not eq

if ($my_num > 10){
echo 'it\'s greater than 10!<br>';
} else {
if ($my_num > 2){
echo 'at least it\'s more than 2<br>';
}
} 

echo '<br>';
$rand_num = rand(1,10);
echo 'The number I found is '.$rand_num . '<br>';
echo "With a double quoted \" string: $rand_num<br>";
if($rand_num % 2 == 0){
echo 'even';
} else {
echo 'odd';
}
echo "<br>";

$k = 0;
while ($k<10){
echo "$k<br>";

$k = $k + 1;
//$k += 1;
//$k++; //셋다 같은 것
}
echo "<br>";
$j = 15;
do {
$j++;
echo "$j<br>";
} while($j<10);

for ($m = 20; $m < 50; $m++) {
echo "$m<br>";
}
echo "after the loop m is $m";

?>



<?php
// HTML이랑 PHP 같이 쓰는 법
$k = 5;
if($k > 3){
?>

<h1>Greater than 3!</h1>

<?php
} else {
?>

<h1>less</h1>

<?php
}
?>