<?php
session_start();
	$relativeCompactness = $_POST['RelativeCompactness'];
	$surfaceArea = $_POST['SurfaceArea'];
	$wallArea = $_POST['WallArea'];
	$roofArea = $_POST['RoofArea'];
	$overallHeight = $_POST['OverallHeight'];
	$orientation = $_POST['Orientation'];
	$glazingArea = $_POST['GlazingArea'];
	$glazingAreaDistribution = $_POST['GlazingAreaDistribution'];
	$checked = $_POST[check];
	
	echo $_SESSION['model'];
	
	if($relativeCompactness && $surfaceArea && $wallArea  && $roofArea && $overallHeight && $orientation && $glazingArea  && $glazingAreaDistribution){
		$connect = mysql_connect("localhost", "root", "")
		or die ("Neuspješno spajanje na bazu.");
		mysql_select_db("registration") or die("Neuspješan pronalazak baze.");
		
		 $sql = mysql_query("INSERT INTO upiti (relativeCompactness, surfaceArea, wallArea, roofArea, overallHeight, orientation, glazingArea, glazingAreaDistribution) " . "VALUES ('$relativeCompactness', '$surfaceArea', '$wallArea', '$roofArea', '$overallHeight', '$orientation', '$glazingArea', '$glazingAreaDistribution')");
			if ($sql){
				echo "Korisnik uspjesno registriran!";
				header('Refresh: 2; URL = check-efficiency.php');
			} 
			else{
				echo "Korisnik nije uspjesno registriran!";
			}
	}
	
?>