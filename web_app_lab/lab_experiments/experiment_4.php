<?php
session_start(); // Start the session

// Check if the visitor count is set in the session
if (!isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] = 0; // Initialize count if not set
}

// Increment the visitor count
$_SESSION['visitor_count']++;

// Store visitor count in a variable
$visitorCount = $_SESSION['visitor_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Tracker</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #282c34;
            color: white;
            font-family: 'Roboto', sans-serif;
            text-align: center;
        }
        .counter {
            background-color: #61dafb;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            font-size: 48px;
            animation: fadeIn 0.5s ease-in-out;
        }
        h1 {
            font-weight: 300;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        .pulse {
            animation: pulse 1s infinite;
        }
    </style>
</head>
<body>
    <div>
        <h1>Welcome to Our Website!</h1>
        <div class="counter pulse">You are visitor number: <strong><?php echo $visitorCount; ?></strong></div>
    </div>
</body>
</html>
