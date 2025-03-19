<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array to table</title>
</head>
<body>

<?php
$array = [
    [1,"karan",21,"sarangarh"],
    [2,"vishal",25,"balod"],
    [3,"aadi",24,"ballia"],
    [4,"shubham",24,"saran"],
    [1,"karan",21,"sarangarh"],
    [2,"vishal",25,"balod"],
    [3,"aadi",24,"ballia"],
    [4,"shubham",24,"saran"],
    [1,"karan",21,"sarangarh"],
    [2,"vishal",25,"balod"],
    [3,"aadi",24,"ballia"],
    [4,"shubham",24,"saran"],
    [1,"karan",21,"sarangarh"],
    [2,"vishal",25,"balod"],
    [3,"aadi",24,"ballia"],
    [4,"shubham",24,"saran"],
    [1,"karan",21,"sarangarh"],
    [2,"vishal",25,"balod"],
    [3,"aadi",24,"ballia"],
    [4,"shubham",24,"saran"],
    [1,"karan",21,"sarangarh"],
    [2,"vishal",25,"balod"],
    [3,"aadi",24,"ballia"],
    [4,"shubham",24,"saran"],
    [1,"karan",21,"sarangarh"],
    [2,"vishal",25,"balod"],
    [3,"aadi",24,"ballia"],
    [4,"shubham",24,"saran"]
]

?>

<center>

    <table border= 10>
        <tr>
            
            <th>s_no</th>
            <th>name</th>
            <th>age</th>
            <th>address</th>
        </tr>

<?php
foreach ($array as $a){
    echo "<tr align=middle>";
    echo "<td>$a[0] </td>" ;
    echo "<td>$a[1] </td>" ;
    echo "<td>$a[2] </td>" ;
    echo "<td>$a[3] </td>" ;     
    echo "</tr>";
    
}
?>

</table>
</center>




    
</body>
</html>