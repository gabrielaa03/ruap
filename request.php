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
$radioButton = $_POST['check'];  
$user1 = $_SESSION['username'];

error_reporting(E_ALL);
ini_set('display_errors', 0);
$url = 'https://ussouthcentral.services.azureml.net/workspaces/4efe196c92aa4ca282f0817e9c7fd6f0/services/41db5b135c2147b4b53f4ed91f8d32ed/execute?api-version=2.0&details=true';
$api_key = 'cId5U5sqtjnIvOcT8DTNSIENQjhYx+1kSIwCpjRiWyFEe3kvnA7S8L3iFXAEvbg+NbN85V99+rac4AV9QDFLsA==';
$api_key1 = 'Z/GrZ43RpVdmZhEuWNYO97OCy0CDpM9YTOc2D+VZU+1ISCtfgfd3DqeJa1q7eOSu3ZWYwlc1PrXPDQDaTfkqEg==';


if($relativeCompactness && $surfaceArea && $wallArea  && $roofArea && $overallHeight && $orientation && $glazingArea  && $glazingAreaDistribution){
		$connect = mysqli_connect("localhost", "root", "") or die ("Neuspješno spajanje na bazu.");
		mysqli_select_db($connect , "registration") or die("Neuspješan pronalazak baze.");
		
		if ($radioButton == "heatingLoad") { 
			error_reporting(E_ALL);
			ini_set('display_errors', 0);	

			$url = 'https://ussouthcentral.services.azureml.net/workspaces/4efe196c92aa4ca282f0817e9c7fd6f0/services/41db5b135c2147b4b53f4ed91f8d32ed/execute?api-version=2.0&details=true';
			$api_key = 'cId5U5sqtjnIvOcT8DTNSIENQjhYx+1kSIwCpjRiWyFEe3kvnA7S8L3iFXAEvbg+NbN85V99+rac4AV9QDFLsA==';	
			$data = array(
				'Inputs'=> array(
					'input1'=> array(
						'ColumnNames' => array ('Relative Compactness', 'Surface Area', 'Wall Area', 'Roof Area', 'Overall Height', 
						'Orientation', 'Glazing Area', 'Glazing Area Distribution', 'Heating Load', 'Cooling Load'),
						'Values' => array (array (0, 0, 0, 0, 0, 0, 0, 0, 0, 0))
					),
				),
					'GlobalParameters' => new StdClass(),
			);

			$body = json_encode($data);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.$api_key, 'Accept: application/json'));
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

			$response  = json_decode(curl_exec($ch), true);
			//echo 'Curl error: ' . curl_error($ch);
			curl_close($ch);
			var_dump ($response);
			$result = $response["Results"]["output1"]["value"]["Values"][0][10];	
		
			$_SESSION['result'] = $result;
			$sql = mysqli_query($connect, "INSERT INTO upiti (relativeCompactness, surfaceArea, wallArea, roofArea, overallHeight, orientation, glazingArea, glazingAreaDistribution, heatingLoad, coolingLoad, username) " . "VALUES ('$relativeCompactness', '$surfaceArea', '$wallArea', '$roofArea', '$overallHeight', '$orientation', '$glazingArea', '$glazingAreaDistribution', $result, 0, '$user1')");
	      
		}else if ($radioButton == "coolingLoad"){
			error_reporting(E_ALL);
			ini_set('display_errors', 0);	

			$url = 'https://ussouthcentral.services.azureml.net/workspaces/4efe196c92aa4ca282f0817e9c7fd6f0/services/41db5b135c2147b4b53f4ed91f8d32ed/execute?api-version=2.0&details=true';
			$api_key1 = 'Z/GrZ43RpVdmZhEuWNYO97OCy0CDpM9YTOc2D+VZU+1ISCtfgfd3DqeJa1q7eOSu3ZWYwlc1PrXPDQDaTfkqEg==';	
			$data1 = array(
				'Inputs'=> array(
					'input1'=> array(
						'ColumnNames' => array ('Relative Compactness', 'Surface Area', 'Wall Area', 'Roof Area', 'Overall Height', 
						'Orientation', 'Glazing Area', 'Glazing Area Distribution', 'Heating Load', 'Cooling Load'),
						'Values' => array (array (0, 0, 0, 0, 0, 0, 0, 0, 0, 0))
					),
				),
					'GlobalParameters' => new StdClass(),
			);

			$body1 = json_encode($data1);

			$ch1 = curl_init();
			curl_setopt($ch1, CURLOPT_URL, $url);
			curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.$api_key1, 'Accept: application/json'));
			curl_setopt($ch1, CURLOPT_POST, 1);
			curl_setopt($ch1, CURLOPT_POSTFIELDS, $body1);
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

			$response1  = json_decode(curl_exec($ch1), true);
			//echo 'Curl error: ' . curl_error($ch);
			curl_close($ch1);
			var_dump ($response1);
			$result1 = ($response1["Results"]["output1"]["value"]["Values"][0][10]) * 100;
			
			
			$sql1 = mysqli_query($connect, "INSERT INTO upiti (relativeCompactness, surfaceArea, wallArea, roofArea, overallHeight, orientation, glazingArea, glazingAreaDistribution, heatingLoad, coolingLoad) " . "VALUES ('$relativeCompactness', '$surfaceArea', '$wallArea', '$roofArea', '$overallHeight', '$orientation', '$glazingArea', '$glazingAreaDistribution', 0, $result)");
			if ($sql1){
				header('Refresh: 2; URL = check-efficiency.php');
			} 
			else{
				echo "Ponovite upit!";
			}   
	}
}
        
?>
