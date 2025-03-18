<?php 

$a = 5;
$b = 6;

//and &   (only 1 1 = 1)
echo "and : ",$a&$b ,"<br>";

// or |  (only 0 0 = 0)
echo "or : ", $a|$b ,"<br>";

// xor ^  (only 1 0 = 1)
echo "xor : ", $a^$b ,"<br>";

// not   (0 to 1 and 1 to 0)
echo "not : ", ~$a ,"<br>";

// left shift << (add zero to right side)
echo "left shift : ", $a<<$b ,"<br>";

// right shift >> (add zero to left side and remove value from right side)
echo "left shift : ", $a>>$b ,"<br>";


?>