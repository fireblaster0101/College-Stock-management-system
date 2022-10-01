<?php
//connect with file config.php
include('config.php');
?>

<?php error_reporting(0); //ignore all error in this page ?>

<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../clg_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../clg_login.php");
  }
?>
<?php
    header('Location: ../dept/index.php');
?>
