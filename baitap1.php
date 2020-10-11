<?php
$arr = [11, 2, 8, 10, 5, 99, 1, 8, 9];
$newArr=[];
$n=count($arr)/3;
for($i=0;$i<$n;$i++){
    array_push($newArr,$arr[$i],$arr[$n+$i],$arr[$n*2+$i]);
}
echo "<pre>";
print_r($newArr);
