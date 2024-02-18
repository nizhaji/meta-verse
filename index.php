<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Page</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .loading-text {
            font-size: 24px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div>
        <p class="loading-text">Loading...</p>
    </div>

    <script>
        // Set the URL of the destination page
        var destinationUrl = 'request.php';

        // Set the delay time in milliseconds (e.g., 3000 for 3 seconds)
        var delayTime = 3000;

        // Function to redirect after a delay
        function redirect() {
            window.location.href = destinationUrl;
        }

        // Set a timeout to call the redirect function after the delay
        setTimeout(redirect, delayTime);
    </script>
</body>
</html>
