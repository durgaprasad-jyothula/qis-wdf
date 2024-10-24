<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(to right, #f0f4f8, #e0e0e0);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        h2 {
            color: #444;
            margin-top: 30px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        input[type="text"] {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
            width: 300px;
        }
        li {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Cookie Operations</h1>

    <!-- Add Cookie Section -->
    <h2>Add a Cookie</h2>
    <form method="post">
        <input type="text" name="cookie_name" placeholder="Cookie Name" required>
        <input type="text" name="cookie_value" placeholder="Cookie Value" required>
        <button type="submit" name="add_cookie">Add Cookie</button>
    </form>

    <?php
    // Add Cookie Logic
    if (isset($_POST['add_cookie'])) {
        $cookie_name = $_POST['cookie_name'];
        $cookie_value = $_POST['cookie_value'];
        $expiry_time = time() + (86400 * 30); // Cookie expires in 30 days

        setcookie($cookie_name, $cookie_value, $expiry_time, "/"); // "/" makes cookie available in the whole domain
        echo "<p>Cookie '<strong>$cookie_name</strong>' has been added with value '<strong>$cookie_value</strong>'.</p>";
    }
    ?>

    <!-- Delete Cookie Section -->
    <h2>Delete a Cookie</h2>
    <form method="post">
        <input type="text" name="delete_cookie_name" placeholder="Cookie Name to Delete" required>
        <button type="submit" name="delete_cookie">Delete Cookie</button>
    </form>

    <?php
    // Delete Cookie Logic
    if (isset($_POST['delete_cookie'])) {
        $delete_cookie_name = $_POST['delete_cookie_name'];

        // Set the cookie with an expiry time in the past
        setcookie($delete_cookie_name, "", time() - 3600, "/");
        echo "<p>Cookie '<strong>$delete_cookie_name</strong>' has been deleted.</p>";
    }
    ?>

    <!-- Display Current Cookies -->
    <h2>Current Cookies</h2>
    <ul>
        <?php
        if (count($_COOKIE) > 0) {
            foreach ($_COOKIE as $name => $value) {
                echo "<li><strong>$name</strong>: $value</li>";
            }
        } else {
            echo "<li>No cookies found.</li>";
        }
        ?>
    </ul>
</body>
</html>
