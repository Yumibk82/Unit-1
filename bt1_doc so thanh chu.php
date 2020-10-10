<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <strong>Please input your number</strong><input type="text" name="number">
    <button><strong>Convert</strong></button>
</form>
<?php
    $convert="";
    $lessThanTen=["zero","one","two","three","four","five","six","seven","eight","nine"];
    $lessThanTwenty=["ten","eleven","twelve","thirteen","fourteen","fifteen","sixteen","seventeen","eighteen","nineteen"];
    $num_of_goods=["twenty","thirty","forty","fifty","sixty","seventy","eighty","ninety"];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num=$_REQUEST['number'];
        if(($num<0)||($num>1000)){
            echo "Please input a number more than zero and less than thousand";
        return;
        }else {
            if($num>=0 && $num<10){
                $convert=$lessThanTen[$num];
            }else if($num>=10 && $num<20){
                $convert=$lessThanTwenty[$num-10];
            }else if($num<100){
                if($num%10===0){
                    $convert=$num_of_goods[$num/10-2];
                }else{
                    $convert=$num_of_goods[$num/10-2]." ".$lessThanTen[$num%10];
                }
            }else if($num<1000){
                if($num%100===0 && $num>0){
                    $convert=$lessThanTen[$num/100]." hundred";
                }else{
                    if($num%100<10){
                        $convert=$lessThanTen[$num/100]." hundred".$lessThanTen[$num%100];
                    }else if($num%100<20)
                    {
                        $convert=$lessThanTen[$num/100]." hundred".$lessThanTwenty[$num%100-10].$lessThanTen[$num];
                    }else if(($num%100)%10===0){
                        $convert=$lessThanTen[$num/100]." hundred".$num_of_goods[$num%100/10-2];
                    }else {
                        $convert=$lessThanTen[$num/100]." hundred".$num_of_goods[$num%100/10-2].$lessThanTen[($num%100)%10];
                    }
                }
            }
        }
    echo $convert;
}


?>
</body>
</html>