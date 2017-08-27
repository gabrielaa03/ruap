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
			
			
			<form name="frmRegistration" method="post" action="saveparamters.php">
				<table border="0" class="tableForChecking" >
					<?php if(!empty($success_message)) { ?>	
					<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
					<?php } ?>
					<?php if(!empty($error_message)) { ?>	
					<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
					<?php } ?>
					<tr>
						<td class="tableRow1"><b>Relativna kompaktnost<b/></td>
						<td class="tableRow1"><b>Površina zgrade<b/></td>
						<td class="tableRow1"><b>Površina zidova<b/></td>
						<td class="tableRow1"><b>Površina krova<b/></td>
					</tr>
					<tr>
						<td class="tableRow1"><input type="number_format" class="demoInputBox" name="RelativeCompactness" value="<?php if(isset($_POST['RelativeCompactness'])) echo $_POST['RelativeCompactness']; ?>"></td>
						<td class="tableRow1"><input type="number_format" class="demoInputBox" name="SurfaceArea" value="<?php if(isset($_POST['SurfaceArea'])) echo $_POST['SurfaceArea']; ?>"></td>
						<td class="tableRow1"><input type="number_format" class="demoInputBox" name="WallArea" value="<?php if(isset($_POST['WallArea'])) echo $_POST['WallArea']; ?>"></td>
						<td class="tableRow1"><input type="number_format" class="demoInputBox" name="RoofArea" value="<?php if(isset($_POST['RoofArea'])) echo $_POST['RoofArea']; ?>"></td>
						
					</tr>
					<tr>
						<td class="tableRow1"><b>Visina cjelokupne zgrade<b/></td>
						<td class="tableRow1"><b>Orijentacija<b/></td>
						<td class="tableRow1"><b>Površina prozora<b/></td>
						<td class="tableRow1"><b>Raspodjela površina<b/></td>
					</tr>
					<tr>
					<td class="tableRow1"><input type="number_format" class="demoInputBox" name="OverallHeight" value="<?php if(isset($_POST['OverallHeight'])) echo $_POST['OverallHeight']; ?>"></td>
						<td class="tableRow1"><input type="number_format" class="demoInputBox" name="Orientation" value="<?php if(isset($_POST['Orientation'])) echo $_POST['Orientation']; ?>"></td>
						<td class="tableRow1"><input type="number_format" class="demoInputBox" name="GlazingArea" value="<?php if(isset($_POST['GlazingArea'])) echo $_POST['GlazingArea']; ?>"></td>
						<td class="tableRow1"><input type="number_format" class="demoInputBox" name="GlazingAreaDistribution" value="<?php if(isset($_POST['GlazingAreaDistribution'])) echo $_POST['GlazingAreaDistribution']; ?>"></td>
						<br><br>
					</table>
					<div class="tableRow1">
					<input name="heatingLoad" type="radio"> Opterećenje hlađenja <br><br>
					<input name="coolingLoad" type="radio"> Opterećenje zagrijavanja <br><br>
	
					<input type="submit" name="register-user" value="Provjeri učinkovitost" class="btnCheck"><br><br>
				
						
					<div class="trazenaVrijednost">Tražena vrijednost iznosi: </div> <input type="number_format" name="trazenaV" value="">
					</div>

				
			</form>
	</body>
</html>
