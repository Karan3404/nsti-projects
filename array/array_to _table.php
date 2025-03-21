<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array to table</title>
</head>
<body>

<?php

//ini_set('display_error',0);  //dont show errors at all

$array = [
    [1,"karan",21],
    [2,"vishal",25],
    [3,"aadi",24],
    [4,"shubham",24],
    [5,"ribhu",21],
    [6,"pinaki",25],
    [7,"manoranjan",24],
    [8,"rohit",24],
    [9,"gagan",21],
    [10,"deepak",25],
    [11,"shivlal",24],
    [12,"soma",24],
    [13,"sushma",21],
    [14,"frima",25],
    [15,"reema",24],
    [16,"shilpi",24],
    [17,"muskan",21],
    
];
$records = isset($_GET['records']) ? $_GET['records'] : 1;
$ppage = 5;
$tp = ceil(count($array) / $ppage);
$s = ($records - 1) * $ppage;
$std = array_slice($array, $s, $ppage);

?>

<center>

    <table border= 10>
        <tr>            
            <th>s_no</th>
            <th>name</th>
            <th>age</th>
        </tr>

<?php
foreach ($array as $a){
    echo "<tr align=middle>";
    echo "<td>$a[0] </td>" ;
    echo "<td>$a[1] </td>" ;
    echo "<td>$a[2] </td>" ;
    echo "</tr>";
    
};

?>

</table>
</center>

<div>

<?php
// Loop through all the pages (from 1 to total pages)
for ($i = 1; $i <= $tp; $i++):

    // If the current page is selected, show it as bold
    if ($i == $records):
        echo "<strong>" . $i . "</strong>";  // Bold the current page number
    else:
        // Otherwise, show it as a clickable link
        echo "<a href='?records=" . $i . "'>" . $i . "</a>";
    endif;

endfor;
?>
</div>
    
</body>
</html>