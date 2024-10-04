<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Files</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Uploaded Files</h1>
    
    <table>
        <thead>
            <tr>
                <th>File Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Directory where files are uploaded
            $targetDir = "uploads/";
            
            // Get all files in the uploads directory
            $uploadedFiles = array_diff(scandir($targetDir), array('..', '.'));
            
            // Display each file in a table row
            foreach ($uploadedFiles as $file): ?>
                <tr>
                    <td><?php echo htmlspecialchars($file); ?></td>
                    <td>
                        <a href="<?php echo $targetDir . htmlspecialchars($file); ?>" target="_blank">View</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><a href="upload_form.php">Upload More Files</a></p>
</body>
</html>
