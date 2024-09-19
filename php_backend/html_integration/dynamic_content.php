<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP and HTML Example</title>
</head>
<body>
    <h1>User Profile</h1>
    <?php
        $username = "Durga Prasad";
        $email = "durgaprasad@gmail.com";
        $age = 26;
    ?>
    <table border="">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?php echo $username ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $age ?></td>
            </tr>
        </tbody>
    </table>
    <div>
        <p>Name: <?php echo $username; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Age: <?php echo $age; ?></p>
    </div>
</body>
</html>
