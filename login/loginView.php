<?php
    session_start();
?>

<!DOCTYPE html>
<!--
Login Page
Kelsey McCutcheon, Griffin Baxter, Jacob Capra
-->

<html>
    <head>
        <title>Inventory Management System</title>
        <style type="text/css">
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Login</h1>
        <p>Please Enter Your Login Information</p>
        <form name="login" action="login/login.php" method="post" >
            Username (email): <input type="text" name="username" /><br>
            Password: <input type="text" name="password" />
            <p> <?php if(isset($_SESSION['login_err'])) {echo $_SESSION['login_err'];} ?></p>
            <input type="submit" name="Login" value="Login" />
        </form>
    </body>
</html>