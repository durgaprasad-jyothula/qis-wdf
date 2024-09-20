<?php
	
	// Connection parameters
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wdf";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	echo "<br>";
	// Close the connection
	// mysqli_close($conn);
	
	
?>