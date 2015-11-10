<html xmins="http:www;w3;org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>blog</title>
</head>

<body>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
								<input type="text" name="name" value="name">

								<input type="file" name="image" >
								<input type="submit" name="submit" value="upload" >

							
					
<?php
if (isset($_POST['submit']))
{
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
    
	$name	= $_POST['name'];
	$image	= $_POST['image'];
$sql = "INSERT INTO 'blob' (`id`, `name`, `image`)
		VALUES(NULL, '{$name}', '{$image}')";
$imageName=mysql_real_escape_string($_FILES["image"]["name"]);
$imageData=mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
$imageType=mysql_real_escape_string($_FILES["image"]["type"]);
				
if (substr($imageType,0,5) == "image")
{
	$sql = "INSERT INTO 'blob' (`id`, `name`, `image`)
		VALUES(NULL, '{$imageName}', '{$imageData}')";
}
else
{
	echo "Only images are allowed";
}
}

?>
</body>
</html>