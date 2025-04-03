<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Dots Loader</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .loader {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dot {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: #ff5733;
            border-radius: 50%;
            animation: slide 1.5s infinite ease-in-out;
        }

        .dot:nth-child(1) { animation-delay: 0s; }
        .dot:nth-child(2) { animation-delay: 0.2s; }
        .dot:nth-child(3) { animation-delay: 0.4s; }

        @keyframes slide {
            0%, 100% { transform: translateX(0); opacity: 0.3; }
            50% { transform: translateX(15px); opacity: 1; }
        }
    </style>
</head>
<body>

    <div class="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

</body>
</html>
