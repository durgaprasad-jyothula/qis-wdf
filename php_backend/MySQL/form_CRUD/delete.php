<?php
include "connection.php";

// DELETE query
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookID = $_POST['bookID'];

    $sql = "DELETE FROM Books WHERE BookID='$bookID'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
	
?>