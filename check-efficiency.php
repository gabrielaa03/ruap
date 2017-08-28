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

			
			<form name="frmRegistration" method="post" action="request.php">
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
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="Orientation" value=""></td>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="GlazingArea" value=""></td>
						<td class="tableRow1"><input type="number" min="0.00" max="1.00" step="0.1" name="GlazingAreaDistribution" value=""></td>
						<br><br>
					</table>
				
					
					<div class="tableRow1">	
					<label for="coolingLoad"><input type="radio" name="check"  value="coolingLoad">Opterećenje hlađenja</label><br/>
					<label for="heatingLoad"><input type="radio" name="check"  value="heatingLoad">Opterećenje zagrijavanja</label><br/><br>
				
				

					<input type="submit" name="register-user" value="Provjeri učinkovitost" class="btnCheck"><br>
					<div class="trazenaVrijednost">Tražena vrijednost iznosi: </div> <output type="number" name="trazenaV" value="1515"></output>
					</div>
			</form>
	</body>
</html>
