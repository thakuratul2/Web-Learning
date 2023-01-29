<?php
/*
1. For Loops
2. While Loops
3. Do..While
4. Foreach
*/

for($x=1;$x<10;$x++){
    echo "<pre>";
    print_r($x);
}

$i = 0;
while($i<5){
    echo "<pre>";
    print_r($i);
    $i++;
}

do {
    echo "<pre>";
    print_r($i);
} while ($i < 0);

$name = array("atul", "singh");
foreach($name as $value){
    echo "$value<pre>";
}

?>