<?php
/**
 * Created by PhpStorm.
 * User: KSH
 * Date: 7/9/15
 * Time: 6:35 PM
 */
//Write a function that returns true if score increases.

function scoresIncreasing($scores) {
    for ($k=0; $k < count($scores)-1; $k++) {
        if ($scores [$k] < $scores [$k+1]) {
            return "true";
        }  } else {return "false";}
}
echo scoresIncreasing(array(96, 98, 100))."<br>";//should give me true
echo scoresIncreasing(array(86, 84, 90));
?>

<?php/* same thing
function matt($s) {
    for ($i=1; $i<count($s);$i++){
        if ($s[$i]<$s[])
    }

}


?>