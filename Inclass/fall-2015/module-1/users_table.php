<?php

$users = array(
    array(
        'id' => 123,
        'name' => 'Samir',
        'location' => 'Austin'
    ),
    array(
        'id' => 789,
        'name' => 'Chris',
        'location' => 'Austin'
    )
);



// 1. Create a HTML table from this data
// 2. (opt) Stripe each row a different color

echo "<Body><table><tr>
        <th>Id</th>
        <th>Name</th>
        <th>Location</th>";

foreach ($users as $index => $user) { //giving array number to index

    // % aka. modulus operator

    if ($index % 2 == 0) {
        echo '<tr>';
    } else {
        echo '<tr style = background-color: red>';
    }
     echo '<td>'.$user['id'].'</td>';
    echo '<td>'.$user['name'].'</td>';
    echo '<td>'.$user['location'].'</td>';
    echo '</tr>';

        ?>



    </table>

    </Body>


<?php
}
?>