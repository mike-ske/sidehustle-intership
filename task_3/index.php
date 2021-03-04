<?php
session_start();

$save = isset($_POST['register']);

if ($save) 
{


    $_SESSION['email'] = $_POST['email'];
    $_SESSION['username'] =  $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header("location: login.php");
   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register_form">
        <form action="" method="post" class="register">
            <h1>Create account</h1>
            <input type="text" name="username" id="username" class="username" placeholder="Username" required>
            <input type="email" name="email" id="email" class="email" placeholder="Email address" required>
            <input type="password" name="password" id="password" class="password" placeholder="Password" required>
            <input type="submit" value="Register" name="register" class="register_send">
            <label for="acct" class="acct"><a href="login.php" id="acct">Login</a></label>
        </form>
    </div>
</html>