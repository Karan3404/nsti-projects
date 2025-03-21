<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <?php
        // Defining a multidimensional array containing student records (Serial No, Name, Age)
        // $array = [
        //     [1, "karan", 21],
        //     [2, "vishal", 25],
        //     [3, "aadi", 24],
        //     [4, "shubham", 24],
        //     [5, "ribhu", 21],
        //     [6, "pinaki", 25],
        //     [7, "manoranjan", 24],
        //     [8, "rohit", 24],
        //     [9, "gagan", 21],
        //     [10, "deepak", 25],
        //     [11, "shivlal", 24],
        //     [12, "soma", 24],
        //     [13, "sushma", 21],
        //     [14, "frima", 25],
        //     [15, "reema", 24],
        //     [16, "shilpi", 24],
        //     [17, "muskan", 21],
        // ];



        $array = [
            [1, "vishal", 24, "balod", 25698568566],
            [2, "karan", 21, "raigarh", 2569664174],
            [3, "aaditya", 24, "baliya", 1256962032],
            [4, "shubham", 25, "sarang", 1200124766],
            [5, "frima", 24, "raigarh", 2660007455],
            [6, "sushma", 21, "lohara", 2556986698],
            [7, "veena", 19, "giraudh", 1701254874],
            [8, "sargam", 24, "sarsiwa", 2002154879],
            [9, "dipti", 24, "raipur", 2401236932],
            [10, "shashikant", 19, "raipur", 679320036597],
            [11, "nishikant", 22, "raipur", 200365973305],
            [12, "neelima", 19, "raipur", 63022454111],
            [13, "naresh", 24, "kasdol", 6936597744101],
            [14, "abhishek", 24, "chanpa", 69323241592],
            [15, "mohnish", 25, "kasdol", 7765979632],
            [16, "hemank", 22, "hirapur", 30365979632],
            [17, "rohit", 25, "patna", 3005979632],
            [18, "ribhu", 28, "howrah", 336597963022],
            [19, "monish", 21, "baliya", 35970089632],
            [20, "jatin", 25, "jhalmala", 320088365979632],
            [21, "shraddha", 23, "balod", 328800365979632],
            [22, "khushbu", 23, "dhamtari", 34525365979632],
            [23, "sami", 23, "balod", 320326932],
            [24, "rakesh", 25, "balod", 320329896327],
            [25, "priya", 22, "bhilai", 9876543210],
            [26, "rahul", 24, "durg", 8765432109],
            [27, "ankita", 23, "korba", 7654321098],
            [28, "arjun", 25, "bilaspur", 6543210987],
            [29, "tanya", 22, "raigarh", 5432109876],
            [30, "mukesh", 26, "raipur", 4321098765],
            [31, "ravi", 24, "jagdalpur", 3210987654],
            [32, "manish", 23, "ambikapur", 2109876543],
            [33, "neha", 21, "korba", 1098765432],
            [34, "sandeep", 22, "kanker", 9988776655],
            [35, "akash", 25, "raipur", 8877665544],
            [36, "megha", 24, "bilaspur", 7766554433],
            [37, "vijay", 23, "durg", 6655443322],
            [38, "jyoti", 21, "raigarh", 5544332211],
            [39, "harsh", 26, "bhilai", 4433221100],
            [40, "pallavi", 22, "dhamtari", 3322110099],
            [41, "vivek", 24, "balod", 2211009988],
            [42, "varun", 23, "kawardha", 1100998877],
            [43, "sonal", 25, "bastar", 9900887766],
            [44, "deepak", 22, "raipur", 8800776655],

        ];


        // Get the current page number from the URL query parameter 'records' (default to 1 if not set)
        $records = isset($_GET['records']) ? $_GET['records'] : 1;

        // Define how many records to show per page
        $records_per_page = 10;

        // Calculate the total number of pages required to display all records
        $total_pages = ceil(count($array) / $records_per_page);

        // Calculate the starting index of the records to be displayed on the current page
        $s = ($records - 1) * $records_per_page;

        // Extract a portion of the array based on the page number (pagination logic)
        $std = array_slice($array, $s, $records_per_page);
        ?>

        <!-- Creating a table to display student records -->
        <table border="10">
            <tr>
                <th bgcolor="cyan">s_no</th>
                <th bgcolor="cyan">Name</th>
                <th bgcolor="cyan">Age</th>
                <th bgcolor="cyan">Address</th>
                <th bgcolor="cyan">Mobile_no</th>
            </tr>
            <?php
            // Loop through the extracted records and display them in the table
            foreach ($std as $s):
            ?>
                <tr align="middle">
                    <td bgcolor="lightgreen"><?php echo $s[0] ?></td> <!-- Display Serial Number -->
                    <td bgcolor="lightgreen"><?php echo $s[1] ?></td> <!-- Display Name -->
                    <td bgcolor="lightgreen"><?php echo $s[2] ?></td> <!-- Display Age -->
                    <td bgcolor="lightgreen"><?php echo $s[3] ?></td> <!-- Display Address -->
                    <td bgcolor="lightgreen"><?php echo $s[4] ?></td> <!-- Display Mobile_no -->
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- Pagination Links -->
        <div>
            <?php
            // Loop to create page number links
            for ($i = 1; $i <= $total_pages; $i++):
            ?>
                <?php
                // Highlight the current page number
                if ($i == $records): ?>
                    <strong>
                        <?php echo $i; ?>
                    </strong>
                <?php
                else:
                ?>
                    <!-- Generate a clickable link for other pages -->
                    <a href="?records=<?php echo $i ?>"><?php echo $i; ?></a>
                <?php
                endif;
                ?>
            <?php
            endfor;
            ?>
        </div>

    </center>
</body>

</html>
