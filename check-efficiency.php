<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="energyefficiency.css">
		<link href='https://fonts.googleapis.com/css?family=Euphoria Script' type="text/css" rel='stylesheet'>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
	<nav class="navbar navbar-default navbar-fixed-top" >
		 <div class="navbar-header">
		  <a class="navbar-brand" href="#" style="font-family:'Euphoria Script'; color:green; font-size:40px;"><b>Procjena učinkovitosti</b></a>
		</div>
			  <div class="container">
				  <button class="navbar-toggle" data-toggle="collapse" data-target=".my">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				  </button>

				<div class="collapse navbar-collapse my" >
				   <ul class="nav navbar-nav navbar-center"> 
					<li><a href="welcomepagelogged.html" >O energetskoj učinkovitosti</a></li>
					<li><a href="parametrilogged.php">Parametri procjenjivanja</a></li>
					<li class="active"><a href="#" href="check-efficiency.php">Ispitaj učinkovitost</a></li>
					<li><a href="get-all.php">Popis svih ispitivanja</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php" >Sign out</a></li>
				</ul>
				</div>
			  </div>
			</nav>

			
			<form name="frmRegistration" method="post" action="displayValue()">
				<table border="0" class="tableForChecking" >
					<?php if(!empty($success_message)) { ?>	
					<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
					<?php } ?>
					<?php if(!empty($error_message)) { ?>	
					<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
					<?php } 
					
					$result = $_SESSION['result'];
					?>
					<tr>
						<td class="tableRow1"><b>Relativna kompaktnost<b/></td>
						<td class="tableRow1"><b>Površina zgrade<b/></td>
						<td class="tableRow1"><b>Površina zidova<b/></td>
						<td class="tableRow1"><b>Površina krova<b/></td>
					</tr>
					<tr>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="RelativeCompactness" value=""></td>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="SurfaceArea" value=""></td>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="WallArea" value=""></td>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="RoofArea" value=""></td>
						
					</tr>
					<tr>
						<td class="tableRow1"><b>Visina cjelokupne zgrade<b/></td>
						<td class="tableRow1"><b>Orijentacija<b/></td>
						<td class="tableRow1"><b>Površina prozora<b/></td>
						<td class="tableRow1"><b>Raspodjela površina<b/></td>
					</tr>
					<tr>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="OverallHeight" value=""></td>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.25" name="Orientation" value=""></td>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="GlazingArea" value=""></td>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="GlazingAreaDistribution" value=""></td>
						<br><br>
					</table>
				
					
					<div class="tableRow1">	
					<label for="coolingLoad"><input type="radio" name="check"  value="coolingLoad">Opterećenje hlađenja</label><br/>
					<label for="heatingLoad"><input type="radio" name="check"  value="heatingLoad">Opterećenje zagrijavanja</label><br/><br>
				
				

					<input type="submit" name="register-user" value="Provjeri učinkovitost" class="btnCheck"><br>
					<div class="trazenaVrijednost">Tražena vrijednost iznosi: <input name="vrijednost" id="vrijednost"> </div> 
					</div>
			</form>

		<?php
		function displayValue()
		{
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
		}?>
	</body>
</html>
