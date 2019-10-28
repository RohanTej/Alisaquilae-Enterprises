<?php session_start(); require 'functions.php';?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Optional theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top hidee">
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
					<?php echo get_session_reg('re'); ?>
				</div>
			</div>
		</nav>
	</div>
	<div style="width: 100%; height: 100%; background-color: #fff !important;" class="jumbotron">
		<div class="showw" style="position: absolute; left:50%;"><div style="position: relative; left:-50%;"><a href="#"><img style="width: 200px; height: auto;" src="assets/logo_lg.png"></a></div></div>
		<br><br>
		<div class='sign' style="width:25%;">
			<center><div class="showw" style="position: relative;"><h5 id="re" style="cursor : pointer">Don't have an account? Click here to register.</h5></div></center>
			<h2>Login</h2><br><br>
			<form method="POST" action="">
				<table style="width: 100%;" cellpadding="10px">
					<tr> 
					<td colspan="2"><div id="demail"><input type="text" class="c-form-control" id="email" maxlength="128" placeholder="Email Address"></div></td>
					</tr>
					<tr><td><br></td></tr>
					<tr> 
					<td colspan="2"><div id="dpass"><input type="password" class="c-form-control" id="pass" maxlength="64" placeholder="Password"></div></td>
					</tr>
					<tr><td><br></td></tr>
					<tr><td colspan="2"><center><button id="submit" class="btn btn-lg btn-info round" type="submit" >Login</button></center></td></tr>
					<tr><td><br></td></tr>
					<tr><td><center><div id="er"></div></center></td></tr>
				</table>
			</form>
		</div>
	</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/md5.js"></script>
<script>
	console.log("Page loading");
	$(document).ready(function(){
		console.log("Page load compete");
		$('#re').on('click',function(){
			window.location.href = ('signup');
		});
		console.log("Page load compete");
		$("#submit").on('click',function(){
			//getting vaules into variables
			var email = $('#email').val();
			var pass = $('#pass').val();
			var error = "false";
			
			pass = calcMD5(pass);
			
			//reseting the form
			$('#demail').html("<input type='text' class='c-form-control' maxlength='128' id='email' value='" + email + "'>");
			$('#dpass').html("<input type='password' class='c-form-control' maxlength='64' id='pass'>");
			
			//checking if the values are empty
			if (/\S/.test(email)){} else {$('#demail').html("<input type='text' class='c-form-control error' maxlength='128' id='email' value='" + email + "'>"); error = "true";}
			if (/\S/.test(pass)){} else {$('#dpass').html("<input type='password' class='c-form-control error' maxlength='64' id='pass'>"); error = "true";}
			
			if (error == "false") {
				console.log("no errors");
				$.ajax({
					url: 'login_a',
					data: {email: email, pass: pass,},
					type: 'POST',
					success: function(responce) {
						if ($.trim(responce) == "1") {
							$('#er').html("Success");
							window.location.href = "home";
							return false;
						} else {
							$('#er').html("Error :");
							$('#er').append(responce);
							return false;
						}
					},
					error: function(repsopnce) {
						$('#er').html("There was a major error");
					}
				});
			} else {
				$('#er').html("Please fill the data properly.");
			}
		});
	});
</script>
<?php
	/* foreach($_SESSION['data'] as $key=>$value)
    {
    // and print out the values
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
    }	 */
	if (isset($_GET['er'])) {
		if ($_GET['er'] == 'e') {
			echo "
				<script>$('#er').html('Please fill the data properly.');</script>
			";
		}
		if ($_GET['er'] == 'w') {
			echo "
				<script>$('#er').html('Wrong username or password!');</script>
			";
		}
	}
?>
</body>
</html>