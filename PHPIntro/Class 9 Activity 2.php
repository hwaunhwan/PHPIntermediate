
<p>Look up your house on Google Maps</p>

<img src=" ">

<! -- use a form and $_POST to display a map that's centered on the location
    a user enters. You can do this by plugging the user's input in to a Google Maps URL. -->

<! -- Allow the user to control one of the extra options from the Google Maps API docs (e.g. zoom, image size, etc) -->
<! -- Try using radio buttons, text areas or check boxes -->



<?php

if (isset($_POST['submit'])){
    echo 'This is the map of you house'.'<br><br>';
    ?>
    <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $_POST['address'];?>&zoom=<?php echo $_POST['Zoom_Level']; ?>&size=400x400">
    <?php
    }

    ?>


<form action = "Class 9 Activity 2.php"
      method = "POST">

    <input type="text" name="address">
    <select name="Zoom_Level">
        <option value="">Choose one...</option>
        <option value=1>1</option>
        <option value=9>9</option>
        <option value=17>17</option>
    </select><br>
    <input type="submit" name="submit">

</form>

