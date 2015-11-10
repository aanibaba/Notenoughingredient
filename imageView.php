<?php
$servername = "localhost";
$username = "pragmeec_recipes";
$password = "Recipes@123";
$dbname = "pragmeec_recipes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_GET['image_id'])) {
$sql = "SELECT imageType,imageData FROM output_images WHERE imageId=" . $_GET['image_id'];
$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysql_fetch_array($result);
header("Content-type: " . $row["imageType"]);
echo $row["imageData"];
}
mysql_close($conn);
?>