<!--written by ayoola anibaba -->
<?php
$mysql_hostname = "localhost";
$mysql_user = "ingredients";
$mysql_password = "IngredientS@123";
$mysql_database = "ingredients";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>