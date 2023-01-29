<?php
/*
1. Indexed Array
2. Associative Array
3. Multidimensional Array
*/

$name = array("Car1", "Car2");
echo "<pre>";
print_r($name);

$arr = array(
    'name' => "Atul",
    'email' => "admin@gmail.com",
    'contact'=> array('895366','212510')
);
$arr['place'] = 'meerut';
print_r($arr);

?>