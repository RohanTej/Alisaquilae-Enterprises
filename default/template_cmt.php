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
<!--
In this template file I will go voer the webiste structure in breif.
But if you want indepth infomration or you want to make any changes in the website, visit the following website or even 
go to google for more knowledge.
http://www.w3schools.com/bootstrap/default.asp
-->
<!--"overflow: hidden" hides the scroll bar-->
<body style="overflow: hidden;">
	<!--Containss the structure of the website, kind of like a foundation -->
	<div class="container-fluid">
		<!--Nav bar is the bar on the top -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<!--This one contains the structure of the nav bar -->
			<div class="container-fluid">
				<!--This is the "Heading" part of the nave bar. The part which is always visible no matter the screen size-->
				<div class="navbar-header">
					<!--This button will be visible when the screen size is small enough. ex: Mobile. -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--The left side of the screen where the logo and the name resides. -->
					<a href="#" class="pull-left"><img src="assets/logo.png"></a>
					<a class="navbar-brand" href="index" id="title">Alisaquilae Enterprises</a>
				</div>
				<!--This is the part of the nav bar which is be shown like normal but hidden and replaced with the buttons to create more space when the screen size is reduced-->
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<?php echo get_session_reg(); ?>
				</div>
			</div>
		</nav>
	</div>
	<!--From here the main content of the website starts-->
	<div style="background-color: #fff !important;" class="jumbotron">
     
  </div>
	
<!--Script is loaded in the end of the page to decerese the load times of the page. Use network tab in inspect elemnt and refresh the page to see the page load times.-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/md5.js"></script>
</body>
</html>