<?php 
	$con = mysql_connect("localhost", "root", "", "registration");
	if(!$con)
	{
		die("Connection to database WAS NOT successful: " . mysql_error());
	}
?>