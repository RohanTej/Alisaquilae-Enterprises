<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Optional theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Default</title>
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
					<a class="navbar-brand" href="index" id="title">Alisaquilae Enterprises</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<?php echo get_session_reg(); ?>
				</div>
			</div>
		</nav>
	</div>
	<div style="background-color: #fff !important;" class="jumbotron">
     
  </div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/md5.js"></script>
</body>
</html>