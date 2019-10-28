<?php 
require "connect.php";
session_start();

//functions
//This page contains global functions which can be called from any page given it is linked to it. Please not it can only call PHP functions.

function get_session_reg($a = "false") {
	if (isset($_SESSION['open'])) {
		$s = $_SESSION['open'];
		if ($s == 'true') {
			if ($a == 're') {
				echo "success <br>";
				header('location:home'); 
			}
			echo "Hi, " . $_SESSION['data']['fname'] . " " . $_SESSION['data']['lname'];
		} else {
			echo "<ul class='nav navbar-nav navbar-right'><li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li><li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Register</a></li></ul>";
		}
	}
}
?>