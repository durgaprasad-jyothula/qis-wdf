<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Multiplication</title>
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
    <h1>Multiply Two Matrices</h1>
    <form method="post">
        <textarea name="matrix1" rows="5" placeholder="Enter first matrix (comma separated rows) e.g. 1,2;3,4" required></textarea><br>
        <textarea name="matrix2" rows="5" placeholder="Enter second matrix (comma separated rows) e.g. 1,0;0,1" required></textarea><br>
        <button type="submit">Multiply</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input1 = $_POST['matrix1'];
        $input2 = $_POST['matrix2'];

        $matrix1 = array_map(function($row) {
            return explode(',', $row);
        }, array_map('trim', explode(';', $input1)));

        $matrix2 = array_map(function($row) {
            return explode(',', $row);
        }, array_map('trim', explode(';', $input2)));

        $rows1 = count($matrix1);
        $cols1 = count($matrix1[0]);
        $rows2 = count($matrix2);
        $cols2 = count($matrix2[0]);

        if ($cols1 != $rows2) {
            echo "Error: Number of columns in the first matrix must equal the number of rows in the second matrix.";
            exit;
        }

        $result = array_fill(0, $rows1, array_fill(0, $cols2, 0));

        for ($i = 0; $i < $rows1; $i++) {
            for ($j = 0; $j < $cols2; $j++) {
                for ($k = 0; $k < $cols1; $k++) {
                    $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }

        echo "<h2>Resulting Matrix:</h2><pre>";
        foreach ($result as $row) {
            echo implode(", ", $row) . "\n";
        }
        echo "</pre>";
    }
    ?>
</body>
</html>
