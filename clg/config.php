<?php
//connect to database mysql
$connect = mysqli_connect("localhost","root","","stockdb");

//cek check if connect to mysql failed, so it will appear message 
if (mysqli_connect_error()){
	echo "failed to connect: " . mysqli_connect_error();
}

?>