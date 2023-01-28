<?php
$x = 10;

if($x<5){
    echo "X is larger than 5";
}elseif($x>7){
    echo "X is greater than 7";
}else{
    echo "Error";
}
echo "<br>";
$marks = 40;
switch($marks){
    case $marks > 85:
        echo "A+";
        break;
    case $marks > 80:
        echo "B+";
        break;
    case $marks > 60:
        echo "C+";
        break;
    default:echo"Invalid";
}


?>