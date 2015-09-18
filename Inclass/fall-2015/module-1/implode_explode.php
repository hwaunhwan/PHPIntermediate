<?php
// 4. Create a comma separated string from the arrays
//    using implode and explode

$data = '"Samir", "Austin", "31", "Loves dogs", "Does not love cockroaches"';

$dataArray = explode (",", $data); //explode breaks it a ","
echo '<pre>';
print_r($dataArray);

$newData = array('coffee', 'juice', 'yerba mate'); //implode joins array with ".__."
echo implode('.___.', $newData) . PHP_EOL;

?>

Check out www.PHP-fig.org for styling
