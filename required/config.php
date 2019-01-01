<?php
	$servername = "localhost";
	$username   = "vidyalio_vits";
	$password   = "cEuOhpaQe2xO";
	$dbname     = "vidyalio_vits";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else {
		
	}
?>
