<?php
include "connection.php";

// INSERT query
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publishedYear = $_POST['publishedYear'];
    $genre = $_POST['genre'];
    
    
    $sql = "INSERT INTO Books (Title, Author, PublishedYear, Genre) VALUES ('$title', '$author', $publishedYear, '$genre')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
        }
        
        
        ?>