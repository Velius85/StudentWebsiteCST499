<?php
	error_reporting(E_ALL ^ E_NOTICE);
	
	if( isset($_SESSION['id']))
		echo "Welcome: ".$_SESSION['firstName'];
	
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta Name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel='stylesheet' href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title> Welcome to the Student Database </title>
</head>
<body>

	<div class="jumbotron">
		<div class="container text container">
			<h1> Student Database </h1>
		</div>
	</div>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"><span/>
						<span class="icon-bar"><span/>
						<span class="icon-bar"><span/>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav>
	<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"><span>Home</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"/>AboutUs</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-earphone"/>ContactUs</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				
				
<?php
	//ini_set('session.use_only_cookies','1');
	session_start();
	
	if( isset($_SESSION['id']))
	{
	echo '<li><a href="classregistration.php"><span class="glyphicon glyphicon-briefcase"></span> Class Registration </a></li>';
	echo '<li><a href="profile2.php"><span class="glyphicon glyphicon-briefcase"></span> Profile </a></li>';
	echo '<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout </a></li>';
	}
	else
	{
	echo '<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>';
	echo '<li><a href="registration.php"><span class="glyphicon glyphicon-pencil"></span> Registration</a></li>';
	}
?>
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>