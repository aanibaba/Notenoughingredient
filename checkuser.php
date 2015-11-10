<?php
if (!isset($_POST['submit'])){
?>
<!-- The HTML login form -->
	
<?php
} else {

	require_once("db_const.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
 
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
}
	if (!$result->num_rows == 1) {
		$_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
		echo "<p>Invalid username/password combination</p>";
		echo "<script>setTimeout(\"location.href = 'http://notenoughingredients.com/login.php';\",2500);</script>";
		   
	} else {
		echo "logged in successfully";
echo "<script>setTimeout(\"location.href = 'http://notenoughingredients.com/recipes.html';\",2500);</script>";
 
    

      
      		
		// do stuffs
	}
	

}
header("Location: $redirect");
?>