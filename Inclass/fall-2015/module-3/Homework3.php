
<html>

    <head>
        <title>Countries on Earth</title>
    </head>

    <body>

        <h3>Countries on Earth</h3>

        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    Enter Country Name: <input type="text" name="country_name" size="30"/>
            <input type="submit" value="Get Details"/>
        </form>

        <hr/>

        <?php

        // Check for an incoming POST request
        if ($_POST) {

            $countryName = $_POST['country_name'];

            $countryName = strtolower($countryName);
            $countryName = htmlentities($countryName);
            $apiEndpoint ='http://restcountries.eu/rest/v1/name/' . $countryName;
            $countryJson = @file_get_contents($apiEndpoint);



            if (!empty($countryJson)) {
                $countryArray = json_decode($countryJson);
                //$countryObject = array_pop($countryArray);

                if(!empty($countryArray)) {
                    foreach ($countryArray as $countryObject)


                        echo '<div class="country-details">';
                    echo 'Country Name: ' . $countryObject->name . '<br/>';
                    echo 'Capital: ' . $countryObject->capital . '<br/>';
                    echo 'Region: ' . $countryObject->region . '<br/>';
                    echo 'Population : ' . number_format($countryObject->population) . '<br/>';
                    echo 'Language : ' . implode(', ', $countryObject->languages) . '<br/>';
                    echo '</div>';


                    echo 'The user entered: ' . $countryName;
                }

            } else {
                echo 'Malformed request';
            }

        }
        ?>

</body>

</html>