<?php
	
	// Connection parameters
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "librarydb";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn) {
		echo "Database connected successfully";
	}
	else{
		echo "Not Connected";
	}
	echo "<br>";
	// Close the connection
	// mysqli_close($conn);
	
	
?>