<?php
session_start();
//confirmation
if ($_POST['confirm'] == 'copy') {
  $_SESSION['open'] = "false";
  session_destroy();
  echo 'Success';
} else {
  echo 'echo';
}

?>