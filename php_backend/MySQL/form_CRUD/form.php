<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operations</title>
</head>
<body>
    <h2>Insert Record</h2>
    <form action="insert.php" method="post">
        Title: <input type="text" name="title"><br>
        Author: <input type="text" name="author"><br>
        Published Year: <input type="number" name="publishedYear"><br>
        Genre: <input type="text" name="genre"><br>
        <input type="submit" value="Insert">
    </form>

    <h2>Update Record</h2>
    <form action="update.php" method="post">
        Book ID: <input type="number" name="bookID"><br>
        New Genre: <input type="text" name="newGenre"><br>
        <input type="submit" value="Update">
    </form>

    <h2>Delete Record</h2>
    <form action="delete.php" method="post">
        Book ID: <input type="number" name="bookID"><br>
        <input type="submit" value="Delete">
    </form>

    <h2>Select Record</h2>
    <form action="select.php" method="get">
        Genre: <input type="text" name="genre"><br>
        <input type="submit" value="Select">
    </form>
</body>
</html>
