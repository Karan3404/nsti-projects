<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circular Progress Bar</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .progress-circle {
            position: relative;
            width: 100px;
            height: 100px;
        }

        .progress-circle svg {
            transform: rotate(-90deg);
        }

        .progress-circle circle {
            fill: none;
            stroke-width: 8;
            stroke: #ddd;
        }

        .progress-bar {
            fill: none;
            stroke-width: 8;
            stroke: #ff5733;
            stroke-dasharray: 314;
            stroke-dashoffset: 314;
            transition: stroke-dashoffset 2s linear;
        }

        .percentage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
            font-weight: bold;
            color:rgb(51, 105, 255);
        }
    </style>
</head>
<body>

    <div class="progress-circle">
        <svg width="100" height="100">
            <circle cx="50" cy="50" r="50"></circle>
            <circle class="progress-bar" cx="50" cy="50" r="50"></circle>
        </svg>
        <div class="percentage">0%</div>
    </div>

    <script>
        let progress = 0;
        let progressBar = document.querySelector(".progress-bar");
        let percentage = document.querySelector(".percentage");

        function updateProgress() {
            progress += 1;
            if (progress > 100) progress = 0;
            progressBar.style.strokeDashoffset = 314 - (314 * progress) / 100;
            percentage.innerText = progress + "%";
        }

        setInterval(updateProgress, 100);
    </script>

</body>
</html>
