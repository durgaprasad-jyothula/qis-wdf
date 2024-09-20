<?php
include "connection.php";

// UPDATE query
$sql = "UPDATE Books SET Genre='Classic Fiction' WHERE Title='The Catcher in the Rye'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}




	
?>