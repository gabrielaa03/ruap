<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username && $password){
		$connect = mysql_connect("localhost", "root", "")
		or die ("Neuspješno spajanje na bazu.");
		mysql_select_db("registration") or die("Neuspješan pronalazak baze.");
	
	
	$query = mysql_query("SELECT * FROM registration  WHERE username = '$username' and password = '$password'");
	
	$numrows = mysql_num_rows($query);
	
	if($numrows!==0){
		$_SESSION['username'] = $username;
		echo "Pričekajte trenutak...";
		header('Refresh: 2; URL = check-efficiency.php');
	}
	
	else{
		die("Ovaj korisnik ne postoji.");
		echo "Pričekajte trenutak...";
		header('Refresh: 2; URL = welcomepage.html');
	}
	}
	else{
		die("Unesite lozinku i korisničko ime");
	}
?>