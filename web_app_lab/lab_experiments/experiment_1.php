<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1 {
            color: #343a40;
            margin-bottom: 20px;
        }
        button {
            padding: 12px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        #output {
            margin-top: 20px;
            font-weight: bold;
            font-size: 20px;
            color: #495057;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
    </style>
    <script>
        function fetchData() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'data.json', true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 400) {
                    var data = JSON.parse(xhr.responseText);
                    document.getElementById('output').innerHTML = data.message;
                } else {
                    console.error('Request failed with status:', xhr.status);
                }
            };
            xhr.onerror = function() {
                console.error('Request failed');
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>Restaurant Specials</h1>
    <button onclick="fetchData()">Fetch Daily Special</button>
    <div id="output"></div>
</body>
</html>
