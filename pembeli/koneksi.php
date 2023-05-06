<?php

// Connection variables
$host = "localhost";
$user = "root";
$pass = "";
$dbs = "cv_permatarimba";

// Connect to MySQLi database
$koneksi = mysqli_connect($host, $user, $pass, $dbs);

// Check connection
if(mysqli_connect_errno()){
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit;
}

?>