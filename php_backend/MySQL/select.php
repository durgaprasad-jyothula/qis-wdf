<?php
include "connection.php";

// SELECT query
$sql = "SELECT * FROM Books";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "BookID: " . $row["BookID"] . " - Title: " . $row["Title"] . " - Author: " . $row["Author"] . "<br>";
    }
} else {
    echo "0 results";
}




	
?>