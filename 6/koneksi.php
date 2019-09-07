<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname  = "dbgudang";
	// create conn
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// cek conn
	if (!$conn) {
		die("error". mysql_connect_error());
	}
?>