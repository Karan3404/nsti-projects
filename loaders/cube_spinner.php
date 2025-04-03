<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Cube Spinner</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;
        }
        .cube {
            width: 40px;
            height: 40px;
            position: relative;
            transform-style: preserve-3d;
            animation: rotate 1.5s infinite linear;
        }
        .cube div {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 255, 255, 0.6);
            border: 2px solid #00ffff;
        }
        .cube div:nth-child(1) { transform: rotateX(90deg) translateZ(20px); }
        .cube div:nth-child(2) { transform: rotateX(-90deg) translateZ(20px); }
        .cube div:nth-child(3) { transform: rotateY(90deg) translateZ(20px); }
        .cube div:nth-child(4) { transform: rotateY(-90deg) translateZ(20px); }
        .cube div:nth-child(5) { transform: translateZ(60px); }
        .cube div:nth-child(6) { transform: translateZ(-60px); }
        
        @keyframes rotate {
            0% { transform: rotateX(0) rotateY(0); }
            100% { transform: rotateX(360deg) rotateY(360deg); }
        }
    </style>
</head>
<body>
    <div class="cube">
        <div></div><div></div><div></div><div></div><div></div><div></div>
    </div>
</body>
</html>