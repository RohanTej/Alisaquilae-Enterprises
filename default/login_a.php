<?php
	Include "connect.php"; //calls for the SQL login data
  Include "functions.php"; //calls the functions file
  session_start();
	
	//adds the values from login.php into variables.
  $email = $_POST['email'];
  $pass = $_POST['pass'];
	
	//removes the SQL injections moderatly.
  $user = stripslashes($user);
  $pass = stripslashes($pass);
	
	//Sumbits the data to MySQL and if all matches then retrives the user data.
  $sql = "SELECT * FROM `default_user` WHERE f1='$email' AND f2='$pass'";

  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    $uid = $row['uid'];
    
    $sql2 = "SELECT * FROM `default_data` WHERE uid='$uid'";
    
    $result2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($ressult2);
    
    if ($count == 1) {
      $row2 = mysqli_fetch_assoc($result2);
      $_SESSION['data'] = $row2;
      $_SESSION['open'] = 'true';
      echo "1";
    } else {
      echo "Failed retrieving data from the server";
    }

  } else {
    echo 'Wrong username or password!';
  }
?>