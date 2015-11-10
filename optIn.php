<?php
//ini_set('display_errors', 0);




//Attention: if want to use stronger function here to 
//purify the requested parameters and protect against injections.
//Example: $email	= clean_this($_REQUEST["email"]);


// Here we connect to mySQL ==> replace with more values for Server/Host, database, username, password
$dbHost = "localhost";
$dbUserName = "pragmeec_recipes";
$dbPassword = "Recipes@123";
$dbName    ="pragmeec_recipes";

//  Use a different table (and fields for name and email). 
//  But change the table name and field names in the SQL queries below.

//  connect to mySQL
$conlink = mysql_connect($dbHost, $dbUserName, $dbPassword);
if(!$conlink) {die('<span class=errormessage>Unable to connect to '.$dbHost.'</span><br>');}
mysql_select_db($dbName, $conlink);
//  Check if subscriber exists already
$SQL= "select email from mysubscribers where email='".$email."'";
$result	= mysql_query($SQL);
if(!$result) {die('Problem in SQL: '.$SQL);}    //just ccking if there was a problem with your query
if (mysql_num_rows($result)==0) {   // it's a new email=> add it
  $SQL2= "INSERT into mysubscribers (name, email) VALUES ('".$name."', '".$email."')";
    mysql_query($SQL2);
}
mysql_close($conlink);


//Sample script for the table:mysubscribers in the database:newsletters
/*
CREATE TABLE `mysubscribers` (
	`idEmail` mediumint(9) NOT NULL auto_increment,
	`name` varchar(150) default NULL,
	`email` varchar(150) default NULL,
	PRIMARY KEY  (`idEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
*/
?>
	