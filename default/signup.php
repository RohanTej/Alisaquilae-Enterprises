<?php session_start(); require 'functions.php';?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Optional theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Register</title>
</head>
<body style="overflow: auto;">
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
		<div class="sign">
			<center><div class="showw" style="position: relative;"><h5 id="re" style="cursor : pointer">Already have an account? Click here to login.</h5></div></center>
			<h2>Sign up</h2><br><br>
			<table style="width: 100%;" cellpadding="10px">
				<tr> 
				<td><div id="dfname"><input type="text" class="c-form-control" id="fname" style="width: 98%;" maxlength="128" placeholder="First Name*"></div></td>
				<td><div id="dlname"><input type="text" class="c-form-control" id="lname" maxlength="128" placeholder="Last Name*"></div></td>
				</tr>
				<tr><td><br></td></tr>
				<tr> 
				<td colspan="2"><div id="demail"><input type="text" class="c-form-control" id="email" maxlength="128" placeholder="Email Address*"></div></td>
				</tr>
				<tr><td><br></td></tr>
				<tr> 
				<td colspan="2"><div id="dpass"><input type="password" class="c-form-control" id="pass" maxlength="64" placeholder="Password*"></div></td>
				</tr>
				<tr><td><br></td></tr>
				<tr> 
				<td colspan="2"><div id="dcpass"><input type="password" class="c-form-control" id="cpass" maxlength="64" placeholder="Confirm Password*"></div></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
				<td><div id="dfind">
					<select class="c-form-control" style="width: 98%;" id="find">
						<option value="0">Where did you find us?*</option>
						<option value="1">Friend</option>
						<option value="2">Internet</option>
						<option value="3">Advertisement</option>
					</select>
				</div></td>
				<td><input type="text" class="c-form-control" id="phone" maxlength="13" placeholder="Phone"></td>
				</tr>
				<tr><td><br></td></tr>
				<tr> 
				<td><div id="dbus">
					<select class="c-form-control" style="width: 98%;" id="bus">
						<option value="0">Business*</option>
						<option value="1">List option 1</option>
						<option value="2">List option 2</option>
						<option value="3">List option 3</option>
					</select>
				</div></td>
				<td><input type="text" class="c-form-control" id="web" maxlength="128" placeholder="Company Website"></td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td colspan="2"><center><button id="submit" class="btn btn-lg btn-warning round">Submit</button></center></td></tr>
				<tr><td><br></td></tr>
				<tr><td colspan="2"><center><div id="er"></div></center></td></tr>
			</table>
		</div>
	</div>
	
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/md5.js"></script>
<script>
	console.log("Page loading");
	$(document).ready(function(){
		console.log("Page load compete");
		$('#re').on('click',function(){
			window.location.href = ('login');
		});
		$("#submit").on('click',function(){
			//getting vaules into variables
			var fname = $('#fname').val();
			var lname = $('#lname').val();
			var email = $('#email').val();
			var pass = $('#pass').val();
			var cpass = $('#cpass').val();
			var find = $('#find').val();
			var phone = $('#phone').val();
			var bus = $('#bus').val();
			var web = $('#web').val();
			var error = "false";
			var er = "false";
			
			//reseting the form
			$('#dfname').html("<input placeholder='First Name*' style='width: 98%' type='text' class='c-form-control' maxlength='128' id='fname' value='" + fname + "'>");
			$('#dlname').html("<input placeholder='Last Name*' type='text' class='c-form-control' maxlength='128' id='lname' value='" + lname + "'>");
			$('#demail').html("<input placeholder='Email Address*' type='text' class='c-form-control' maxlength='128' id='email' value='" + email + "'>");
			$('#dpass').html("<input placeholder='Password*' type='password' class='c-form-control' maxlength='64' id='pass'>");
			$('#dcpass').html("<input placeholder='Confirm Password*' type='password' class='c-form-control' maxlength='64' id='cpass'>");
			if (find == "1") {$('#dfind').html("<select class='c-form-control' style='width: 98%;' id='find'><option value='0'>Where did you find us?*</option><option value='1' selected>Friend</option><option value='2'>Internet</option><option value='3'>Advertisement</option></select>")};
			if (find == "2") {$('#dfind').html("<select class='c-form-control' style='width: 98%;' id='find'><option value='0'>Where did you find us?*</option><option value='1'>Friend</option><option value='2' selected>Internet</option><option value='3'>Advertisement</option></select>")};
			if (find == "3") {$('#dfind').html("<select class='c-form-control' style='width: 98%;' id='find'><option value='0'>Where did you find us?*</option><option value='1'>Friend</option><option value='2'>Internet</option><option value='3' selected>Advertisement</option></select>")};
			if (bus == "1") {$('#dbus').html("<select class='c-form-control' style='width: 98%;' id='bus'><option value='0' selected>Business*</option><option value='1'>List option 1</option><option value='2'>List option 2</option><option value='3'>List option 3</option></select>");}
			if (bus == "2") {$('#dbus').html("<select class='c-form-control' style='width: 98%;' id='bus'><option value='0'>Business*</option><option value='1'>List option 1</option><option value='2' selected>List option 2</option><option value='3'>List option 3</option></select>");}
			if (bus == "3") {$('#dbus').html("<select class='c-form-control' style='width: 98%;' id='bus'><option value='0'>Business*</option><option value='1'>List option 1</option><option value='2'>List option 2</option><option value='3' selected>List option 3</option></select>");}
			
			
			//checking if the values are empty
			if (/\S/.test(fname)){} else {$('#dfname').html("<input placeholder='First Name*' style='width: 98%' type='text' class='c-form-control error' maxlength='128' id='fname' value='" + fname + "'>"); error = "true";}
			if (/\S/.test(lname)){} else {$('#dlname').html("<input placeholder='Last Name*' type='text' class='c-form-control error' maxlength='128' id='lname' value='" + lname + "'>"); error = "true";}
			if (/\S/.test(email)){} else {$('#demail').html("<input placeholder='Email Address*' type='text' class='c-form-control error' maxlength='128' id='email' value='" + email + "'>"); error = "true";}
			if (/\S/.test(pass)){} else {$('#dpass').html("<input placeholder='Password*' type='password' class='c-form-control error' maxlength='64' id='pass'>"); error = "true";}
			if (/\S/.test(cpass)){} else {$('#dcpass').html("<input placeholder='Confirm Password*' type='password' class='c-form-control error' maxlength='64' id='cpass'>"); error = "true";}
			if (/\S/.test(find)){} else {$('#dfind').html("<input type='text' class='c-form-control error' maxlength='64' id='find' value='" + find + "'>"); error = "true";}
			if (bus == "0") {$('#dbus').html("<select class='c-form-control error' style='width: 98%;' id='bus'><option value='0'>Business*</option><option value='1'>List option 1</option><option value='2'>List option 2</option><option value='3'>List option 3</option></select>"); error = "true";}
			if (find == "0") {$('#dfind').html("<select class='c-form-control error' style='width: 98%;' id='find'><option value='0'>Where did you find us?*</option><option value='1'>Friend</option><option value='2'>Internet</option><option value='3'>Advertisement</option></select>")};
			
			//checking if passwords mached
			if (pass == cpass) {
				pass = calcMD5(pass);
			}
			else {
				console.log("Passwords did not match");
				$('#dpass').html("<input type='password' class='c-form-control-error' maxlength='64' id='pass'>");
				$('#dcpass').html("<input type='password' class='c-form-control-error' maxlength='64' id='c-pass'>");
				$('#er').html("Passwords did not match");
				error = "true";
				er = "true";
			}
			
			if (error == "false") {
				console.log("no errors");
				$.ajax({
					url: 'sign_a',
					data: {fname: fname, lname: lname, email: email, pass: pass, find: find, phone: phone, bus: bus, web: web},
					type: 'POST',
					success: function(responce) {
						if ($.trim(responce) == "1") {
							$('#er').html("Success");
							window.location = "success";
						} 
						if ($.trim(responce) == "0") {
							$('#er').html("There was an error with the connection <br>with the connection, please try again later<br>");
							$('#er').append(responce);
						}
						if ($.trim(responce) == "2") {
							$('#er').html("This account already exists. <br> <a href='login'>Click here</a> to login.");
							$('#demail').html("<input type='text' class='c-form-control-error' maxlength='128' id='email' value='" + email + "'>"); error = "true";
						}
					},
					error: function(repsopnce) {
						$('#er').html("There was a major error");
					}
				});
			} else {
				$('#er').html("Please fill the data properly.");
				if (er == "true") {
					$('#er').html("Passwords did not match");
				}
			}
		});
	});
</script>
</html>