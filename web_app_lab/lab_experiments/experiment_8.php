<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(to right, #e2e2e2, #ffffff);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            display: flex;
            flex-direction: column;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
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
        .error {
            color: red;
            font-size: 0.9em;
            margin-top: -5px;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>PHP Form Handling</h1>

    <?php
    // Initialize variables and error messages
    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";
    $successMsg = "";

    // Form handling logic
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate Name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = htmlspecialchars(trim($_POST["name"]));
        }

        // Validate Email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = htmlspecialchars(trim($_POST["email"]));
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // Validate Message
        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            $message = htmlspecialchars(trim($_POST["message"]));
        }

        // If no errors, process the form
        if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
            $successMsg = "Form submitted successfully!<br>Name: $name<br>Email: $email<br>Message: $message";
            // Reset form fields
            $name = $email = $message = "";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>

        <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>

        <textarea name="message" placeholder="Your Message" rows="5"><?php echo $message; ?></textarea>
        <span class="error"><?php echo $messageErr; ?></span>

        <button type="submit">Submit</button>
    </form>

    <div class="success"><?php echo $successMsg; ?></div>
</body>
</html>
