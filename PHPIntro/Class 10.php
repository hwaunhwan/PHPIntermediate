<?php
/**
 * Created by PhpStorm.
 * User: KSH
 * Date: 7/9/15
 * Time: 6:47 PM
 */

//Google Maps API
//Markers

//The 'markers' parameter
// Markers= 78701|78702|78705 will give a marker in all three locations
// You can color it too: (color:blue)

//Paths
//The 'path' parameter
//Basically like markers but draws a line between points

//Street View
//Need a location and size of img

//Combine database with Google Maps!!!

?>

<form action = "Class 10.php" method = "POST">
    <input type="text" name="address">
    <input type="submit" name="submit">
    <input type="submit" name="clear" value="Clear">
</form>

<?php
$db= new mysqli('localhost','root','root','intro_to_php');

if(isset($_POST['submit'])){
    $addr = $_POST['address'];
    $stmt = $db->prepare("INSERT INTO markers (address) VALUES (?)");//even though it's one column you put VALUES
    $stmt->bind_param('s',$addr);
    $stmt->execute();
}

$result = $db->query("SELECT * FROM markers");
$url = '';
foreach ($result as $row) {
    $url .= urlencode($row['address']);
    $url .= "|";
    }
$url= 'https://maps.googleapis.com/maps/api/staticmap?size=400x400&markers='."$url";
echo "<img src='$url'>";

if(isset($_POST['clear'])){
    $a = $db->query("DELETE FROM markers");
}
?>