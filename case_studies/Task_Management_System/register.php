<?php
include('includes/connection.php');
if (isset($_POST['userRegistration'])) {
    $query = "INSERT INTO users VALUES (null, '$_POST[name]', '$_POST[email]', '$_POST[password]', $_POST[mobile])";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        echo "<script type='text/javascript'>
        alert('User registered successfully...');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Error... Please try again.');
        window.location.href = 'register.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEase | Registration Page</title>
    <!-- jQuery file -->
    <script src="includes/jquery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS files -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header text-center" style="background-color: #5A8F7B; color: white;">
                        <h4>User Registration</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No." required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="userRegistration" class="btn btn-warning btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="index.php" class="btn btn-danger btn-block">Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
