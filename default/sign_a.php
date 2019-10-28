<?php
Include "connect.php";
Include "functions.php";
session_start();

//adds the values from signup.php into variables.
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$find = $_POST['find'];
$phone = $_POST['phone'];
$bus = $_POST['bus'];
$web = $_POST['web'];
$uid = substr(uniqid('', true), -5);

//Sumbits the data to MySQL and if all matches then retrives the user data.
$query = "SELECT * FROM `default_user` WHERE f1='$email'";

$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if ($count == 1) {
  echo "2";
} else {

  $fname = stripslashes($fname);
  $lname = stripslashes($lname);
  $email = stripslashes($email);
  $pass = stripslashes($pass);
  $phone = stripslashes($phone);


  $sql = "INSERT INTO `default_user` SET f1='$email', f2='$pass', uid='$uid', admin='0'";

  $sql2 = "INSERT INTO `default_data` SET uid='$uid', fname='$fname', lname='$lname', find='$find', phone='$phone', bus='$bus', web='$web'";

  if (mysqli_query($conn, $sql)) {
    if (mysqli_query($conn, $sql2)) {
      echo "1"; //success
    } else {
      echo "0"; //error
    }
  } else {
    echo "0"; //error
  }

}


/*
START TRANSACTION;
INSERT INTO `default_user`(`email`, `pass`, `uid`, `admin`) VALUES (`test`, `test`, `a5h46`, `1`);
INSERT INTO `default_data`(`uid`, `fname`, `lname`, `find`, `phone`, `bus`, `web`) VALUES (`a5h46`, `test fname`, `test lname`, `Friend`, `0000000000`, `2`, `www.google.com`);
COMMIT;

START TRANSACTION;
INSERT INTO `default_user` SET f1='admin@admin', f2='21232f297a57a5a743894a0e4a801fc3', uid='a5h46', admin='1';
INSERT INTO `default_data` SET uid='a5h46', fname='AdminF', lname='AdminL', find='Friend', phone='0000000000', bus='2', web='www.google.com';
COMMIT;


INSERT INTO person SET first_name = 'John', last_name = 'Doe';


*/

?>