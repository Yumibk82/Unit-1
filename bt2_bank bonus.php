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
    <strong>Investment Amount</strong><br><input type="text" name="invest" placeholder="So tien dau tu ban dau"><br>
    <strong>Yearly Interest Rate</strong><br><input type="text" name="rate" placeholder="Ty gia"><br>
    <strong>Number of Years</strong><br><input type="text" name="year" placeholder="So nam"><br>
    <button type="submit"><strong>Calculator</strong></button><br>
</form>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $amount =$_POST['invest'];
        $rate =$_POST['rate'];
        $year =$_POST['year'];
        for ($i=1;$i<=$year;$i++){
            $amount=($amount+($rate*$amount));
        }
        echo $amount;
    }
?>
</body>
</html>