<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Progress Bar</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .progress-container {
            width: 300px;
            height: 20px;
            background-color: #ddd;
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-bar {
            width: 0%;
            height: 100%;
            background-color:rgb(88, 51, 255);
            animation: load 4s infinite ease-in-out;
        }

        @keyframes load {
            0% { width: 0%; }
            100% { width: 100%; }
        }
    </style>
</head>
<body>

    <div class="progress-container">
        <div class="progress-bar"></div>
    </div>

</body>
</html>
