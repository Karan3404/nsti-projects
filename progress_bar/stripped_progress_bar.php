<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Striped Progress Bar</title>
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
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }

        .progress-bar {
            width: 0%;
            height: 100%;
            background: repeating-linear-gradient(
                45deg,
rgb(51, 180, 255),
rgb(51, 255, 255) 10px,
rgb(79, 155, 255) 10px,
rgb(170, 79, 255) 20px
            );
            animation: load 3s infinite ease-in-out, moveStripes 1s infinite linear;
        }

        @keyframes load {
            0% { width: 0%; }
            100% { width: 100%; }
        }

        @keyframes moveStripes {
            0% { background-position: 0 0; }
            100% { background-position: 0 0; }
        }
    </style>
</head>
<body>

    <div class="progress-container">
        <div class="progress-bar"></div>
    </div>

</body>
</html>
