<!DOCTYPE HTML>
<html>
<style>
    .login {
        height: 180px; width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }
</style>
<body>
<form action="login.php" method="get">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="10" placeholder="username"/>
        <input type="text" name="password" size="10" placeholder="password"/>
        <input type="submit" value="Sign in"/>
    </div>
</form>
<?php

?>
</body>
</html>