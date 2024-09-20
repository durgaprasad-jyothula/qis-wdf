<?php
include "connection.php";

// INSERT query
$sql = "INSERT INTO Books (Title, Author, PublishedYear, Genre) VALUES ('The Catcher in the Rye', 'J.D. Salinger', 1951, 'Fiction')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('successfully uploaded')</script>";
} else {
    echo "<script>alert('falied to upload')</script> ";
}



	
?>