<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock - Railway Station Style</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://www.transparenttextures.com/patterns/asfalt-dark.png'); /* Textured background */
            background-color: #2c2c2c; /* Fallback color */
            font-family: 'Courier New', Courier, monospace; /* Monospace font */
            color: #fff;
        }
        #clock {
            font-size: 80px; /* Larger font size for visibility */
            background: #000; /* Black background for the clock */
            color: red; /* Red text color */
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
            text-align: center;
            letter-spacing: 2px; /* Spacing between characters */
        }
        h1 {
            margin-bottom: 20px;
            font-size: 36px; /* Adjusted font size for the title */
            color: #fff; /* White color for the title */
        }
    </style>
    <script>
        function updateClock() {
            var now = new Date();
            var hours = String(now.getHours()).padStart(2, '0');
            var minutes = String(now.getMinutes()).padStart(2, '0');
            var seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds;
        }
        setInterval(updateClock, 1000); // Update every second
        window.onload = updateClock; // Initialize clock on page load
    </script>
</head>
<body>
    <div>
        <h1>Digital Clock</h1>
        <div id="clock"></div>
    </div>
</body>
</html>
