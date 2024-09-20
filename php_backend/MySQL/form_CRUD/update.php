<?php
include "connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookID = $_POST['bookID'];
    $newGenre = $_POST['newGenre'];

    $sql = "UPDATE Books SET Genre='$newGenre' WHERE BookID='$bookID'";
    // $stmt = $conn->prepare("UPDATE Books SET Genre=? WHERE BookID=?");

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}


	
?>