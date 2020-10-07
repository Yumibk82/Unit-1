<!DOCTYPE HTML>
<html>

<body>
<form action="login.php" method="post">
    <input type="text" id="name" placeholder="name">
    <input type="text" id="email" placeholder="email">
    <input type="text" id="phone" placeholder="phone">

</form>
<br>
<br>
<?php
    function getData(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
     $name = $_POST['name'];
     $email= $_POST['email'];
     $phone= $_POST['phone'];
    }
?>
</body>
</html>