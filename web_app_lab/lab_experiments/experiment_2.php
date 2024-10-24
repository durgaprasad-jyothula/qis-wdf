<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Events and Selectors</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(to right, #f0f4f8, #e1e9ee);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .box {
            width: 100px;
            height: 100px;
            background-color: lightblue;
            margin: 10px;
            display: inline-block;
            border: 2px solid #007bff;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .box.active {
            background-color: coral;
            transform: scale(1.05);
        }
        .box:hover {
            background-color: lightgreen;
            cursor: pointer;
        }
    </style>
    <script>
        $(document).ready(function() {
            // jQuery selector
            $('.box').click(function() {
                $(this).toggleClass('active');
            });
        });
    </script>
</head>
<body>
    <h1>Click the Boxes!</h1>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
</body>
</html>
