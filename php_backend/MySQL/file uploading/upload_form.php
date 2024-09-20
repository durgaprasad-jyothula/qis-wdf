<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose file to upload:</label>
        <input type="file" id="file" name="file">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
