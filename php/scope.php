<?php
//Global-> outside the function
//Local-> inside the function
//Static-> to store the value of variables

$txt = 7;
$num = 15;
function Text(){
    global $txt;
   global $num;
    echo "Global inside is : $txt<br>";
    echo "Local inside is : $num<br>";
}
Text();
echo "Global outside: $txt<br>";
echo "Local inside is : $num";




?>