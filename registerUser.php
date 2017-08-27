<?php
session_start();
	$username = $_POST['userName'];
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	if($username && $password && $firstName  && $lastName){
		$connect = mysql_connect("localhost", "root", "")
		or die ("Neuspješno spajanje na bazu.");
		mysql_select_db("registration") or die("Neuspješan pronalazak baze.");
		
	$query = mysql_query("SELECT * FROM registration  WHERE username = '$username'");
	$numrows = mysql_num_rows($query);
	
	if($numrows!==0){
		 echo "Korisničko ime već postoji!";
		 header('Refresh: 2; URL = register.php');
	}else{
		 $sql = mysql_query("INSERT INTO registration (username, password, FirstName, LastName) " . "VALUES ('$username', '$password', '$firstName', '$lastName')");
			if ($sql){
				echo "Korisnik uspjesno registriran!";
				header('Refresh: 2; URL = check-efficiency.php');
			} 
	}
	}
?>