<?php session_start(); require 'functions.php';?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Optional theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Home</title>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/md5.js"></script>
	<script>
		function myscr() {
			var width = window.innerWidth;
			if (width < "999") {
				$('#1').html("<span class='glyphicon glyphicon-home'></span>");
				$('#2').html("<span class='glyphicon glyphicon-send'></span>");
				$('#3').html("<span class='glyphicon glyphicon-hourglass'></span>");
				$('#4').html("<span class='glyphicon glyphicon-flash'></span>");
			}
			if (width > "1000") {
				$('#1').html("<strong>Home</strong>");
				$('#2').html("<strong>Orders</strong>");
				$('#3').html("<strong>Time</strong>");
				$('#4').html("<strong>Analytics</strong>");
			}
		}
		
		function click1() {
			$('#contain').load("loading.php");
			$('#t').html("<tr class='active_t'><td id='1' onclick='click1()'><strong>Home</strong></td></tr><tr><td id='2' onclick='click2()'><strong>Orders</strong></td></tr><tr><td id='3' onclick='click3()'><strong>Time</strong></td></tr><tr><td id='4' onclick='click4()'><strong>Analytics</strong></td></tr>");
			$('#contain').load("homei.php");
			myscr();
		}
			
		function click2() {
			$('#contain').load("loading.php");
			$('#t').html("<tr><td id='1' onclick='click1()'><strong>Home</strong></td></tr><tr class='active_t'><td id='2' onclick='click2()'><strong>Orders</strong></td></tr><tr><td id='3' onclick='click3()'><strong>Time</strong></td></tr><tr><td id='4' onclick='click4()'><strong>Analytics</strong></td></tr><");
			$('#contain').load("orderi.php");
			myscr();
		}
			
		function click3() {
			$('#contain').load("loading.php");
			$('#t').html("<tr><td id='1' onclick='click1()'><strong>Home</strong></td></tr><tr><td id='2' onclick='click2()'><strong>Orders</strong></td></tr><tr class='active_t'><td id='3' onclick='click3()'><strong>Time</strong></td></tr><tr><td id='4' onclick='click4()'><strong>Analytics</strong></td></tr>");
			$('#contain').load("timei.php");
			myscr();
		}
			
		function click4() {
			$('#contain').load("loading.php");
			$('#t').html("<tr><td id='1' onclick='click1()'><strong>Home</strong></td></tr><tr><td id='2' onclick='click2()'><strong>Orders</strong></td></tr><tr><td id='3' onclick='click3()'><strong>Time</strong></td></tr><tr class='active_t'><td id='4' onclick='click4()'><strong>Analytics</strong></td></tr>");
			$('#contain').load("anali.php");
			myscr();
		}
	</script>
	<script>
		console.log("Page loading");
		$(document).ready(function(){
			console.log("Page load compete");
			
			myscr();
			window.onresize = function() {
				myscr();
			};
			
			$('#contain').load("homei.php");
			
			$('#title').click(function(){
				$('#contain').load("homei.php");
				$('#t').html("<tr class='active_t'><td id='1'><strong>Home</strong></td></tr><tr><td id='2'><strong>Orders</strong></td></tr><tr><td id='3'><strong>Time</strong></td></tr><tr><td id='4'><strong>Analytics</strong></td></tr>");
			});
			$('#titlee').click(function(){
				$('#contain').load("homei.php");
				$('#t').html("<tr class='active_t'><td id='1'><strong>Home</strong></td></tr><tr><td id='2'><strong>Orders</strong></td></tr><tr><td id='3'><strong>Time</strong></td></tr><tr><td id='4'><strong>Analytics</strong></td></tr>");
			});
			
			$('#out').click(function(){
				$.ajax({
					url: 'logout',
					data: {confirm: 'copy'},
					type: 'POST',
					success: function(responce) {
						window.location = "/alien/default/";
					},
					error: function(responce) {
						window.location = "error";
					}
				});
			});
			/*
			//menu refresh
			//home
			$('#1').click(function(){
				$('#contain').load("loading.php");
				$('#t').html("<tr class='active_t'><td id='1'><strong>Home</strong></td></tr><tr><td id='2'><strong>Orders</strong></td></tr><tr><td id='3'><strong>Time</strong></td></tr><tr><td id='4'><strong>Analytics</strong></td></tr>");
				$('#contain').load("homei.php");
				myscr();
				console.log("1");
			});
			//orders
			$('#2').click(function(){
				$('#contain').load("loading.php");
				$('#t').html("<tr><td id='1'><strong>Home</strong></td></tr><tr class='active_t'><td id='2'><strong>Orders</strong></td></tr><tr><td id='3'><strong>Time</strong></td></tr><tr><td id='4'><strong>Analytics</strong></td></tr><");
				$('#contain').load("orderi.php");
				myscr();
				console.log("2");
			});
			//time
			$('#3').click(function(){
				$('#contain').load("loading.php");
				$('#t').html("<tr><td id='1'><strong>Home</strong></td></tr><tr><td id='2'><strong>Orders</strong></td></tr><tr class='active_t'><td id='3'><strong>Time</strong></td></tr><tr><td id='4'><strong>Analytics</strong></td></tr>");
				$('#contain').load("timei.php");
				myscr();
				console.log("3");
			});
			//anal
			$('#4').click(function(){
				$('#contain').load("loading.php");
				$('#t').html("<tr><td id='1'><strong>Home</strong></td></tr><tr><td id='2'><strong>Orders</strong></td></tr><tr><td id='3'><strong>Time</strong></td></tr><tr class='active_t'><td id='4'><strong>Analytics</strong></td></tr>");
				$('#contain').load("anali.php");
				myscr();
				console.log("4");
			}); */
		});
	</script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="title" class="pull-left"><img src="assets/logo.png"></a>
					<a class="navbar-brand" id="titlee">Alisaquilae Enterprises</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<?php echo get_session_reg(); ?>
				</div>
			</div>
		</nav>
	</div>
	<div style="background-color: #fff; width: 100%; margin: 0px !important;" class="jumbotron specialjum">
		<div class="container-fluid">
			<div style="background-color: #F09941;">
				<div class="collapse list-group right-side" id="sidebar">
					<a class="list-group-item active" style="cursor:default"><strong><?php echo $_SESSION['data'][fname] . " " . $_SESSION['data'][lname]; ?></strong></a>
					<a class="list-group-item" >Notifications <span class="badge">99</span></a>
					<a class="list-group-item">Settings</a>
					<a class="list-group-item" id="out">Logout</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 left-side full-height out" style="background-color: #F09941;">
					<div style="background-color: #242323; width: 94%; float: right;" class="full-height in" id='menu'>
						<table class='table hover' id='t'>
							<tr class='active_t'><td id='1' onclick='click1()'><strong>Home</strong></td></tr>
							<tr><td id='2' onclick='click2()'><strong>Orders</strong></td></tr>
							<tr><td id='3' onclick='click3()'><strong>Time</strong></td></tr>
							<tr><td id='4' onclick='click4()'><strong>Analytics</strong></td></tr>
						</table>
					</div>
				</div>
				<div class="col-md-10 mid" id='contain'>
					<center><img src="assets/ajax-loader.gif" alt="..."></center>
				</div>
			</div>
		</div>
  </div>
</body>
</html>