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
		  <a class="navbar-brand" href="#" style="font-family:'Euphoria Script'; color:green; font-size:40px;"><b>Sva ispitivanja</b></a>
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
					<li ><a href="check-efficiency.php">Ispitaj učinkovitost</a></li>
					<li class="active"><a href="#" href="get-all.php">Popis svih ispitivanja</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php" >Sign out</a></li>
				</ul>
				</div>
			  </div>
			</nav>
			 <?php
			 session_start();
			 $user1 = $_SESSION['username'];
			 $username = "root";
			 $password = "";
			 $host = "localhost";

			  $connector = mysql_connect($host,$username,$password)
				  or die("Unable to connect");
				echo "Connections are made successfully::";
			  $selected = mysql_select_db("registration", $connector)
				or die("Unable to connect");

			  //execute the SQL query and return records
			  $result = mysql_query("SELECT * FROM upiti WHERE username='$user1'");
			  ?>
			  <h2 class="small_title"  style= "margin:70px;">Tablica svih upita iz baze podataka</h2>
			  <table border="2" style= "margin:70px;">
			  <thead>
				<tr class="bottomBorder">
				  <td class="tableRow2"><b>Relativna kompaktnost (m2)</b></td>
				  <td class="tableRow2"><b>Površina zgrade (m2)</b></td>
				  <td class="tableRow2"><b>Površina zidova (m2)</b></td>
				  <td class="tableRow2"><b>Površina krova (m2)</b></td>
				  <td class="tableRow2"><b>Visina cjelokupne zgrade (m)</b></td>
				  <td class="tableRow2"><b>Orijentacija</b></td>
				  <td class="tableRow2"><b>Površina prozora (m2)</b></td>
				  <td class="tableRow2"><b>Raspodjela površina</b></td>
				  <td class="tableRow2"><b>Opterećenje hlađenja (%)</b></td>
				  <td class="tableRow2"><b>Opterećenje zagrijavanja (%)</b></td>
				</tr>
			  </thead>
			  <tbody class="tableRow3">
				<?php
				  while( $row = mysql_fetch_assoc( $result ) ){
					echo"<tr>
					<td>{$row['relativeCompactness']}</td>
					<td>{$row['surfaceArea']}</td>
					<td>{$row['wallArea']}</td>
					<td>{$row['roofArea']}</td>
					<td>{$row['overallHeight']}</td>
					<td>{$row['orientation']}</td> 
					<td>{$row['glazingArea']}</td> 
					<td>{$row['glazingAreaDistribution']}</td> 
					<td>{$row['heatingLoad']}</td> 
					<td>{$row['coolingLoad']}</td> 
					</tr>\n";
				  }
				?>
			  </tbody>
			</table>
			 <?php mysql_close($connector); ?>
	</body>
</html>
