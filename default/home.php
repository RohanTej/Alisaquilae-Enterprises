<?php 
	if(session_id() != ''){
		//session has not started
		session_start();
	} 
	require 'functions.php';
?>
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
</head>
<body>
	<!--This is the head section of the page made for the user page only-->
	<div class="head" style="position: relative;">
		<div class="banner" style="position: absolute;">
			<table class="tbl_main">
				<tr>
					<td class="one" style="width: 135px; padding: 17.5px;">
						<a id="title"><img src="assets/logo_.png" height="100px" width="100px"></a>
					</td>
					<td class="two">
						<center><h1><span id="title_">DASHBOARD</span></h1></center>
					</td>
					<td class="three" style="width: 250px;">
						<center><span id="info"><?php echo get_session_reg(); ?></span></center></br>
						<center><span style="float: left; margin-left: 50px;"><a href="" id="out">Log Out</a></span><span style="float: right; margin-right: 50px;"><a href="#">Settings</a></span></center>
					</td>
				</tr>
			</table>
		</div>
		<div class="tabs" style="position: absolute;">
			<table class="tabs_items" class="hover">
				<tr>
					<td style="width: 25%;"><center><span id="1">Orders</span></center></td>
					<td style="width: 25%;"><center><span id="2">Reports</span></center></td>
					<td style="width: 25%;"><center><span id="3">Support</span></center></td>
					<td style="width: 25%;"><center><span id="4">Coupons</span></center></td>
				</tr>
			</table>
		</div>
	</div>
	<!--This div is used to show the other pages with sufix 'i' without refresing the page.-->
	<div class="main" id="contain">
		
	</div>
<script>
	//adds the loading icon.
	function loader() {
		$('#contain').html("<center><img src='assets/ajax-loader.gif'></center>");
	}
	console.log("Page loading");
	loader();
	$(document).ready(function(){
		console.log("Page load compete");
		//resets/sets the css of the tabs uptop to the respective button clicked.
		function active(id) {
			loader();
			for (i = 1; i < 5; i++) { 
				var s = "#" + i;
				$(s).css({"background-color":"#242323", "color":"#fff", "padding":"5px 10px", "border-radius": "25px"});
			}
			$(id).css({"background-color":"#fff", "color":"#242323", "padding":"5px 10px", "border-radius": "25px"});
		}
		
		//Page load function. When the page loads, homei.php is loaded.
		$('#contain').load("homei.php");
		
		//Loads the homei.php when clicked on the logo or dashboard.
		$('#title').click(function(){
			$('#contain').load("homei.php");
			active();
		});
		$('#title_').click(function(){
			$('#contain').load("homei.php");
			active();
		});
		
		//Logouts a user when called for.
		$('#out').click(function(){
			$.ajax({
				url: 'logout.php',
				data: {confirm: 'copy'},
				type: 'POST',
				success: function(responce) {
					console.log(responce);
					window.location.href = "login";
					return false;
				},
				error: function(responce) {
					window.location = "error";
					console.log(responce);
					return false;
				}
			});
		});
		
		//menu refresh. Loads the pages with the respective button is clicked.
		//orders
		$('#1').click(function(){
			$('#contain').load("orderi.php");
			active('#1');
		});
		//reports
		$('#2').click(function(){
			$('#contain').load("reporti.php");
			active('#2');
		});
		//support
		$('#3').click(function(){
			$('#contain').load("supporti.php");
			active('#3');
		});
		//coupons
		$('#4').click(function(){
			$('#contain').load("coupi.php");
			active('#4');
		});
	});
</script>
</body>
</html>