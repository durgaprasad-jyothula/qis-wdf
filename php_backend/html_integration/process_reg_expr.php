<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<!-- _POST method -->
<h1>_POST method</h1>
Welcome <?php echo $_POST["username"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>







<!-- <p>
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
</p>
<br> -->


<!-- _GET method -->
<h1>_GET method</h1>
Welcome <?php echo $_GET["username"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>






<p>
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.
<br>
GET may be used for sending non-sensitive data.
<br>
<b>Note</b>: GET should NEVER be used for sending passwords or other sensitive information!
</p>
<br>
<?php
//$_GET is an array of variables passed to the current script via the URL parameters.
//get is used to post small amount of data & in this case we will not pass any sensitive information like passwords and all
// $username = $_GET['username'];
// $email = $_GET['email'];

//$_POST is an array of variables passed to the current script via the HTTP POST method.
// $username = $_POST['username'];
// $email = $_POST['email'];




// Validate email using filter_var
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is valid.";
} else {
    echo "Invalid email format.";
}

// Validate username using regex
if (preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
    echo "Username is valid.";
} else {
    echo "Username must contain only letters, numbers, and underscores.";
}
?>
</body>
</html>


