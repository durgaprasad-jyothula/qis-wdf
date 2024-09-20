<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload CSV/Excel Data</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose CSV/Excel file to upload:</label>
        <input type="file" id="file" name="file">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
