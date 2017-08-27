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
		  <a class="navbar-brand" href="#" style="font-family:'Euphoria Script'; color:green; font-size:40px;"><b>Početna stranica</b></a>
		</div>
			  <div class="container">
				  <button class="navbar-toggle" data-toggle="collapse" data-target=".my">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				  </button>

				<div class="collapse navbar-collapse my" >
				   <ul class="nav navbar-nav navbar-center"> 
					<li><a href="welcomepage.html" >O energetskoj učinkovitosti</a></li>
					<li class="active"><a href="#" href="parametrilogged.php">Parametri procjenjivanja</a></li>
					<li class="invisible"><a href="check-efficiency.php">Ispitaj učinkovitost</a></li>
					<li class="invisible"><a href="get-all.php">Popis svih ispitivanja</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
                        <a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                            <div class="col-lg-12">
							<div class="text-center"><h3><b>Login</b></h3></div>
                                <form id="ajax-login-form" action = "validate.php" method = "post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Korisničko ime</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Loznika</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                           
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Login">
                                            </div>
                                        </div>
									</div>
                                    <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                                </form>
                            </div>
                        </ul>
                    </li>
					<li><a href="register.php">Registriraj se</a></li>
				</ul>
				</div>
			  </div>
			</nav>
			
			<article class="article2" style="margin-top:70px">
				<h2 class="small_title">Opis parametara</h2>
				<p>
				<ul class="centeredText" style="font-size:18px">
					<li><b>Relativna kompaktnost</b> - predstavlja omjer između obujma zgrade i ukupne površine</li>
					<li><b>Površina zgrade</b> - površina objekta u m2</li>
					<li><b>Površina zidova</b> - površina zidova u m2</li>
					<li><b>Površina krova</b> - površina krova u m2</li>
					<li><b>Visina cjelokupne zgrade</b> - visina zgrade u m počevši od razine zemljane površine</li> 
					<li><b>Orijentacija</b> - orijentacija zgrade</li>
					<li><b>Površina prozora</b> - ostakljena površina (%)</li>
					<li><b>Raspodjela površina</b> - cjekoupna, južna, sjeverna, istočna i zapadna</li>
					<li><b>Opterećenje zagrijavanje</b> - količina topline po jedinici vremena koja je potrebna kako bi se održavala temperatura zgrade na određenoj razini</li>
					<li><b>Opterećenje hlađenja </b> - brzina kojom je potrebn ukloniti toplinu iz prostora kako bi se održala konstantna temperatura i vlaga.</li>
				</ul>
				</p>
		
				<a href="https://www.123rf.com/stock-photo/energy_efficiency_building.html" target="_blank"><img height="400px" style="margin:8px 8px 8px 250px; border:2px solid black; padding:5px; position:center;" width="300px" src="certificate.jpg" /></a>
				<a href="http://www.keralahouseplanner.com/tips-building-energy-efficient-houses-using-kerala-house-plans/" target="_blank"><img height="400px" style="margin:8px; border:2px solid black; padding:5px; position:center;" width="550px" src="house.png" /></a>
											
			</article>
	</body>
</html>
