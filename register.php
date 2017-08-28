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
	<body class="body-register">
	<nav class="navbar navbar-default navbar-fixed-top" >
		 <div class="navbar-header">
		  <a class="navbar-brand" href="#" style="font-family:'Euphoria Script'; color:green; font-size:40px;"><b>Registracija</b></a>
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
					<li><a href="parametri.php">Parametri procjenjivanja</a></li>
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
                                        <label for="password">Lozinka</label>
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
					<li class="active"><a href="register.php" href="#" >Registriraj se</a></li>
				</ul>
				</div>
			  </div>
			</nav>
			
			<form name="frmRegistration" method="post" action="registerUser.php">
				<table border="0" width="500" align="center" class=" tableRegister demo-table">
					<?php if(!empty($success_message)) { ?>	
					<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
					<?php } ?>
					<?php if(!empty($error_message)) { ?>	
					<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
					<?php } ?>
					<tr>
						<td class="tableRow"><b>Korisničko ime<b/></td>
						<td class="tableRow"><input type="text" class="demoInputBox" name="userName" value=""></td>
					</tr>
					<tr>
						<td class="tableRow"><b>Ime<b/></td>
						<td class="tableRow"><input type="text" class="demoInputBox" name="firstName" value=""></td>
					</tr>
					<tr>
						<td class="tableRow"><b>Prezime<b/></td>
						<td class="tableRow"><input type="text" class="demoInputBox" name="lastName" value=""></td>
					</tr>
					<tr>
						<td class="tableRow"><b>Lozinka<b/></td>
						<td class="tableRow"><input type="password" class="demoInputBox" name="password" value=""></td>
					</tr>
					
					<tr>
						<td colspan=2>
						<input type="submit" name="register-user" value="Registriraj" class="btnRegister"></td>
					</tr>
				</table>
			</form>
			<?php
			session_start();
			$user = ($_POST['username']);
			$_SESSION['user1'] = $user;
			?>
		</body>
</html>

