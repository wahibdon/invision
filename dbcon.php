<?php
$dbpath = 'localhost';
$username = 'invisio1_root';
$password = 'UofL2013!';
 $conn = mysql_connect($dbpath, $username, $password);
			  $db = mysql_select_db("invisio1_drupal",$conn);  	
			 if(!$conn ==true){
			  die("Cannot connect to host" . mysql_error());
			 } 
			 if(!$db = true){
			  die("Cannot connect to database" . mysql_error());
			 }

?>