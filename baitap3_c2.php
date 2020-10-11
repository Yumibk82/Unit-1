<?php
$arr=[1,5,4,7,9,0,-1,13,93,14,15];
$newArr=[];

sort($arr);
print_r($arr);
for ($i=0;$i<count($arr);$i++){
    if($arr[$i+1]-$arr[$i]==1&&$arr[$i]>=0&&$arr[$i+1]>=0){
        array_push($newArr,[$arr[$i],$arr[$i+1]]);
    }
}echo "<pre>";
print_r($newArr);