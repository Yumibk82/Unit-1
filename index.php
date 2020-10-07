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
    <input type="text" name="a">
    <input type="text" name="b">
    <input type="text" name="c">
    <button type="submit">Result</button>
</form>
</body>
<?php
include ("QuadraticEquation.php");
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];

    $ob1 = new QuadraticEquation($a,$b,$c);
    if($ob1->getDiscriminant()>0){
        echo "The root1 of equation is ".$ob1->getRoot1();
        echo "The root2 of equation is ".$ob1->getRoot2();
    }else if($ob1->getDiscriminant()==0){
        echo "The double root is " .$ob1->getRoot1();
    }else{
        echo "The equation has no roots";
    }
}
?>

</html>
