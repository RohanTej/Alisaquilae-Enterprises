<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Optional theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Success</title>
</head>
<body style="overflow: hidden;">
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="pull-left"><img src="assets/logo.png"></a>
					<a class="navbar-brand" href="#" id="title">Alisaquilae Enterprises</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class=''><a href='#'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div style="background-color: #fff !important;" class="jumbotron">
		<br>
		<br>
		<br>
		<br>
		<div style="width: 60%; margin: auto;">
			<div class="alert alert-success">
				<strong>Success!</strong> Your account has been successfully created! You will be redirected to main page shortly or you can do it <a href='login'>manually.</a>
			</div>
		</div>
  </div>
<?php
  header('Refresh: 4; URL=login');
?>
</body>
</html>