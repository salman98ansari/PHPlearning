<?php
/*
==
===
!=
>=
etc

*/

$num = 5;
if($num > 5){
    echo "done";
}
else{
    echo "fail";
}

#nested ifs

$num =6;
if($num >4){
    if($num < 10){
        echo "$num passed";
    }
}

//logical operator
// && OR XOR

if ($num >4 && $num <10){
    echo "$num Passed";
}

#switch

$fav ="blue";

switch($fav){
    case 'red':
        echo "your fab color is red";
        break;
    case 'blue':
        echo "your fab color is blue";
        break;
    default:
        echo "your fav is nothng";
}

echo "<br>";

echo date('d-m-y');
echo "<br>";

date_default_timezone_set('Asia/Kolkata');
echo date('h:i:s a');

$timestamp =strtotime('9:00 pm 22 MArch 2018');
echo date('d/m/y h:i:sa', $timestamp);

?>