<html>

<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function () {

            //Bind to the click event of the button
            //In this case 'click' is the event, on the button
            //The second argument is what happens when the button is clicked = function();
            $("#btn-fetch-data").on('click', function () {

                //console.log('I was clicked!');    //will show on console on the developer tool when the button is clicked
                // we need to get the data from the server
                // Display it in the console!

                $.ajax({
                    url: "server_data.php",
                    dataType: "json",
                    method: "POST",
                    data: {
                        action : 'get_scores',
                        student : 'Samir Patel'
                    },
                    success: function(jsonData) { //jsonData is a variable... can be called something else
                        //This is where I can access each piece of data

//                        for(key in jsonData){ // To see key values
//                            console.log ('key=' + key);
//                            console.log ('value=' + jsonData[key]);
//                        }

                        var name = jsonData.name;
                        var time = jsonData.time;

                        $("#div-data").append(name + ' ' + time + '<br/>');
                        console.log('name = ' + name);
                        console.log('time = ' + time);
                    }
                });

            });

            //console.log('document is ready!');

        });

    </script>
</head>

<body>
<!---->
<?php
//$favoritePet = isset($_POST['favoritePet']) ? $_POST['favoritePet'] : null;
//?>

<!---->
<!--<form name="collectDataForm" action="--><?php //echo($_SERVER['PHP_SELF']);?><!--" method="POST">-->
<!--    <input type="text" name="favoritePet" size="20"-->
<!--           value="--><?php //echo($favoritePet);?><!--"/>-->
<!--<!--    this php makes the value stay after refresh-->
<!--    <input type="submit" value="Do work!"/>-->
<!--</form>-->

<input type="button" value="Fetch Data" class="cls-buttonz" id="btn-fetch-data"/>

<div id="div-data"></div>

<!--
<?php
////move the following to server_data.php
//
////$classMates = array('alex', 'jerry', 'simon', 'samir', 'brian', 'traci', 'jared');
////$numClassmates = count($classMates);
////$index = rand(0, $numClassmates - 1);
////echo $classMates[$index] . ' ' . date('y-m-d h:i:s');
//
//// echo $classMates[$index]. " is awesome!";
////echo '<pre>';
////print_r($_SERVER); //look for php self
//
////echo "GET:";
////print_r($_GET);
////echo '<br/>';
////
////echo "POST:";
////print_r($_POST);
////echo '<br/>';
////
////echo "Request:";
////print_r($_REQUEST); //contains both GET & POST
////echo '<hr/>';
//
//echo $classMates[$index] . ' ' . $favoritePet;
//
//?>
-->


</body>

</html>