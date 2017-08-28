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
	<body style="background-color:lightblue;">
	<nav class="navbar navbar-default navbar-fixed-top" >
		 <div class="navbar-header">
		  <a class="navbar-brand" href="#" style="font-family:'Euphoria Script'; color:green; font-size:40px;"><b>Parametri</b></a>
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
                                <form id="ajax-login-form" action = "validate.php?" method = "post" role="form" autocomplete="off">
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
			<?php
			session_start();
			$user = ($_POST['username']);
			$_SESSION['user1'] = $user;
			?>
			
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
				<a href="data:image/jpeg;base64,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" target="_blank"><img height="300px" style="margin:auto;align: center; border:2px solid black; padding:5px;  display: block; margin: 0 auto;" width="300px" src="c.jfif" /></a>						
			</article>
	</body>
</html>
