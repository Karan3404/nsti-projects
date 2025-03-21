<?php
// Define a variable to check if the popover is open
$showPopover = isset($_GET['show']) && $_GET['show'] == 'true';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Popover</title>
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
            display: <?php echo $showPopover ? 'block' : 'none'; ?>;
        }
    </style>
</head>
<body>
    <div class="popover-container">
        <!-- Button to toggle popover, using GET parameter to control visibility -->
        <a href="?show=true" class="popover-button">Show Popover</a>
        <a href="?show=false" class="popover-button" style="background-color: #dc3545;">Close</a>
        
        <!-- Popover content, shown based on PHP condition -->
        <div class="popover">
            <p>This is a simple popover in PHP!</p>
        </div>
    </div>
</body>
</html>
