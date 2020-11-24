<?php
session_start();
if(isset($_SESSION['user']))
{
    header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IIKOL Site - Login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php require "header.php" ?>
<div class="center-text margin-top-150">
    <h2>IIKOL Site</h2>
    <form action="checklogin.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>