<?php session_start(); require 'functions.php';?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	
	<!-- Optional theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Alisaquilae Enterprises</title>
</head>
<body>
<!--<body style="overflow: hidden;">-->
	<div class="container-fluid">
		<br>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="" class="pull-left"><img src="assets/logo.png"></a>
					<a class="navbar-brand" href="" id="title">Alisaquilae Enterprises</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<?php get_session_reg('re'); ?>
				</div>
			</div>
		</nav>
	</div>
	<div style="background-color: #fff !important;" class="jumbotron">
		<br><br>
		<center>
			<h2>
				Welcome!
			</h2>
			<br><br>
			<div id="border_index">
				<br><br>
				<form method="POST" action="">
					<table>
						<tr><td><b>Email:</b></td></tr>
						<tr> 
						<td><input type="text" class="form-control" id="email"></td>
						</tr>
						<tr><td><br></td></tr><!--Add this line beofre adding another row to create a slight gap. Reduces the cluster-->
						<tr><td><b>Password:</b></td></tr>
						<tr> 
						<td><input type="password" class="form-control" id="pass"></td>
						</tr>
						<tr><td><br></td></tr>
						<tr><td><br></td></tr>
						<tr><td><center><div class="btn-group" id="right"><a href="signup.php" class="btn btn-lg btn-warning">Signup</a><input id="submit" type="button" class="btn btn-lg btn-info" name="get" value="Login"></div></center></td></tr>
						<tr><td><center><h6 id='er'>Sign up to get benefits</h6></center></td></tr>
					</table>
					<br>
				</form>
			</div>
		</center>
	</div>
	<!--Try to keep the script at the end of the page to decrease the page load time.-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/md5.js"></script>
<script>
	console.log("Page loading");
	$(document).ready(function(){
		console.log("Page load compete");
		//When the login button is clicked, the following function is activated.
		$("#submit").on('click',function(){
			//getting vaules into variables
			var email = $('#email').val();
			var pass = $('#pass').val();
			var error = "false";
			
			//converting the password into encrypeted string.
			pass = calcMD5(pass);
			
			//checking if the values are empty
			if (/\S/.test(email)){} else {error = 'true';}
			if (/\S/.test(pass)){} else {error = 'true';}
			
			//checking if there was any issues with the form, if all the values are entered properly, the follow code is executed.
			if (error == "false") {
				console.log("no errors");
				$.ajax({
					url: 'login_a.php',
					data: {email: email, pass: pass,},
					type: 'POST',
					success: function(responce) {
						if ($.trim(responce) == "1") {
							$('#er').html("Success");
							window.location = "home.php";
						} else {
							window.location = "login.php?er=w";
						}
					},
					error: function(repsopnce) {
						$('#er').html("There was a major error");
					}
				});
			} else {
				window.location = "login.php?er=e";
			}
		});
		$('#email').keypress(function (e) {
		 var key = e.which;
		 if(key == 13)  // the enter key code
			{
				$('input[id = submit]').click();
				return false;  
			}
		});
		$('#pass').keypress(function (e) {
		 var key = e.which;
		 if(key == 13)  // the enter key code
			{
				$('input[id = submit]').click();
				return false;  
			}
		});
});
</script>
</body>
</html>