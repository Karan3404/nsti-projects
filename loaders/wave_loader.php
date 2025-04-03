<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave Loader</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #222;
        }
        .wave {
            display: flex;
            gap: 4px;
        }
        .bar {
            width: 6px;
            height: 20px;
            /* background:rgb(130, 233, 34); */
            animation: wave 1.2s infinite ease-in-out;
        }
        
        #bar1{
            background:rgb(238, 255, 0);
        }

        #bar2{
            background:rgb(0, 255, 128);
        }

        #bar3{
            background:rgb(0, 255, 255);
        }

        #bar4{
            background:rgb(111, 0, 255);
        }

        #bar5{
            background:rgb(255, 0, 140);
        }





        .bar:nth-child(1) { animation-delay: -1.1s; }
        .bar:nth-child(2) { animation-delay: -1.0s; }
        .bar:nth-child(3) { animation-delay: -0.9s; }
        .bar:nth-child(4) { animation-delay: -0.8s; }
        .bar:nth-child(5) { animation-delay: -0.7s; }
        
        @keyframes wave {
            0%, 100% { transform: scaleY(1); }
            50% { transform: scaleY(2.5); }
        }
    </style>
</head>
<body>
    <div class="wave">
        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
        <div id="bar4" class="bar"></div>
        <div id="bar5" class="bar"></div>
    </div>
</body>
</html>