<?php
//it is used to compare arrays

//union (combine two array and remove duplicates)

$a =  array(1,2,3);
$b =  array(4,2,4,5);
$c = $a+$b;
print_r($c);
echo "<br>";

// equality (check if two array have same key values)
$d = array(1,2);
$e = array(1,2);
$f = $d==$e;
print_r($f);
echo "<br>";

// identity 
$g = array(1,2);
$h = array(1,2);
$i = $d===$e;
print_r($i);







?>