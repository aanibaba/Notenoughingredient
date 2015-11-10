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
$sql = "SELECT imageId FROM output_images ORDER BY imageId DESC"; 
$result = mysql_query($sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<?php
while($row = mysql_fetch_array($result)) {
?>
<img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" /><br/>
<?php		
}
mysql_close($conn);
?>
</BODY>
</HTML>