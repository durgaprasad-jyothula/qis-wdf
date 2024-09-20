<?php
include "connection.php";

// DELETE query
$sql = "DELETE FROM Books WHERE Title='The Catcher in the Rye'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}




	
?>