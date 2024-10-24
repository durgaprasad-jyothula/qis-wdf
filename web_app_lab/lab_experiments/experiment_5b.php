<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpose of a Matrix</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
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
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: none;
            transition: border-color 0.3s;
        }
        textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        h2 {
            margin-top: 20px;
            color: #333;
        }
        pre {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            white-space: pre-wrap; /* Preserve formatting */
            word-wrap: break-word; /* Handle long lines */
        }
    </style>
</head>
<body>
    <h1>Transpose of a Matrix</h1>
    <form method="post">
        <textarea name="matrix" rows="5" placeholder="Enter matrix (comma separated rows) e.g. 1,2,3;4,5,6" required></textarea><br>
        <button type="submit">Transpose</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['matrix'];
        $rows = array_map('trim', explode(';', $input));
        $matrix = array_map(function($row) {
            return explode(',', $row);
        }, $rows);

        $transpose = array();
        for ($i = 0; $i < count($matrix[0]); $i++) {
            for ($j = 0; $j < count($matrix); $j++) {
                $transpose[$i][$j] = $matrix[$j][$i];
            }
        }

        echo "<h2>Transposed Matrix:</h2><pre>";
        foreach ($transpose as $row) {
            echo implode(", ", $row) . "\n";
        }
        echo "</pre>";
    }
    ?>
</body>
</html>
