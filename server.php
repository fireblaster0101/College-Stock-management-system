<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'stockdb');


// ... 
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
  	$query = "SELECT * FROM college WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      while($data = mysqli_fetch_assoc($results)){
        $role = $data["role"];
      }
  	  $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      $_SESSION['role'] = $role;
      
      if($role == "CLG")
      {
        header('location: clg/index.php');
      }
      
  	 
  	}else {
        echo "<script>alert('Wrong username/password combination');</script>";
  		//array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>