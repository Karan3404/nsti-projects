<?php


// logical operator
echo "<h3>logical operator</h3>";

//logical and (we can use and/&&)
//both the condition should be true
$age=18;
$licence="true";
if($age>=18 && $licence=="true"){
   echo "you can drive a car" ;
}
else {
    echo "you can't drive a car";
}
echo "<br>";

//logical or (we can use or/||)
//any one condition should true
$new_age=17;
$aadhar="true";
$voter_id="true";

if($new_age>=18 && ($aadhar=="true" || $voter_id=="true")){
   echo "you can vote" ;
}
else {
    echo "you can't vote";
}


//logical xor
//only any one condition should be true but not both.



?>