<?php
// No need for PHP logic as hover effect is purely CSS
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Popover with Hover Effect</title>
    <style>
        /* Basic styling for the button */
        .popover-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        /* Styling for the popover container */
        .popover-container {
            position: relative;
            display: inline-block;
        }

        /* Styling for the popover box */
        .popover {
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            background: white;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }

        /* Show popover on hover */
        .popover-container:hover .popover {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>
<body>
    <center>

        <div class="popover-container">
            <!-- Button to trigger popover on hover -->
            <span class="popover-button">Hover me</span>
            
            <!-- Popover content appears on hover -->
            <div class="popover">
                <p>This is a simple hover popover in PHP!</p>
            </div>
        </div>
    </center>
</body>
</html>