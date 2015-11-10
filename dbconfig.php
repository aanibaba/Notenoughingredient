<?php
$dbhost = "localhost";
$dbuser = "ingredients";
$dbpass = "IngredientS@123";
$dbname = "ingredients";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>