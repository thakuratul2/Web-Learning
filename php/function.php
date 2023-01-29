<?php
/*
1. pre defined
2. user defined

*/
function greet(){
    return "Welcome Atul";
}
echo greet();
echo "<pre>";
$vo = 25;
function vote(){
    global $vo;
    if($vo<=18){
        echo " No Vote";
    }else{
        echo "Yes Vote";
    }

}
vote();


?>