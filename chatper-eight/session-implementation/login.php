<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION, $_SESSION['error']) && !empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <form action="login-process.php" method="POST">
        Username: <input type="email" name="username" placeholder="Enter your email.............."><br><br>
        Password: <input type="password" name="password" placeholder="Enter your password........"><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>