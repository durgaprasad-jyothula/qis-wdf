<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wdf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize data
function sanitize($data) {
    global $conn;
    return mysqli_real_escape_string($conn, trim($data));
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    // File upload configuration
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    
    // Allow certain file formats
    $allowedTypes = array('csv');
    
    if (!empty($_FILES["file"]["name"])) {
        // Validate file type
        if (in_array($fileType, $allowedTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                
                // Open uploaded CSV file
                $file = fopen($targetFilePath, "r");

                // Initialize an array to store values to insert
                $sqlValues = array();

                // Read the headers from the CSV file
                $headers = fgetcsv($file);

                // Process each row
                while (($rowData = fgetcsv($file)) !== false) {
                    // Sanitize data from CSV
                    $rowValues = array_map('sanitize', $rowData);

                    // Prepare SQL insert query values
                    $sqlValues[] = "('" . implode("', '", $rowValues) . "')";
                }

                // Close the file handle
                fclose($file);

                // Check if there are rows to insert
                if (!empty($sqlValues)) {
                    // Construct SQL insert query
                    $sql = "INSERT INTO books (" . implode(", ", $headers) . ") VALUES " . implode(", ", $sqlValues);

                    // Execute SQL query
                    if ($conn->query($sql) === TRUE) {
                        echo "Records inserted successfully.";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "No records found to insert.";
                }

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only CSV files are allowed to upload.";
        }
    } else {
        echo "Please select a file to upload.";
    }
}

// Close connection
$conn->close();
?>
