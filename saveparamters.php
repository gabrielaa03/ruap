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
	
	if($relativeCompactness && $surfaceArea && $wallArea  && $roofArea && $overallHeight && $orientation && $glazingArea  && $glazingAreaDistribution){
		$connect = mysql_connect("localhost", "root", "")
		or die ("Neuspješno spajanje na bazu.");
		mysql_select_db("energyefficiency") or die("Neuspješan pronalazak baze.");
	
		 $sql = mysql_query("INSERT INTO novatablica (surfaceArea, wallArea, roofArea, overallHeight, orientation, glazingArea, glazingAreaDistribution, heatingLoad, coolingLoad, relativeCompactness) " . "VALUES ( '$surfaceArea', '$wallArea', '$roofArea', '$overallHeight', '$orientation', '$glazingArea', '$glazingAreaDistribution','$relativeCompactness')");
			if ($sql){
				echo "Korisnik uspjesno registriran!";
				header('Refresh: 2; URL = check-efficiency.php');
			} 
			else{
				echo "Korisnik nije uspjesno registriran!";
			}
	}
	
?>