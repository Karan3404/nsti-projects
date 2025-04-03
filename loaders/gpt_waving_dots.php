<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waving Dots Loader</title>
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
            width: 12px;
            height: 12px;
            margin: 0 5px;
            background-color: #ff5733;
            border-radius: 50%;
            animation: wave 1.5s infinite ease-in-out;
        }

        /* Add delays to create wave effect */
        .dot:nth-child(1) { animation-delay: 0s; }
        .dot:nth-child(2) { animation-delay: 0.1s; }
        .dot:nth-child(3) { animation-delay: 0.2s; }
        .dot:nth-child(4) { animation-delay: 0.3s; }
        .dot:nth-child(5) { animation-delay: 0.4s; }

        @keyframes wave {
            0%, 100% { transform: translateY(0); opacity: 0.6; }
            50% { transform: translateY(-15px); opacity: 1; }
        }
    </style>
</head>
<body>

    <div class="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

</body>
</html>
