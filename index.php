<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IIKOL Site - Index</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js"></script>
</head>
<body>
<div class="float-right inline-block">
    Welcome,
    <b><?= $_SESSION['user']['firstname'] ?></b>,
    <a href="logout.php">Log out</a>
</div>
<h2>IIKOL Site Index</h2>
<div class="center-text">
    <?php include "selectlist.php"; ?>
</div>
<br>
<div id="tabela"></div>
</body>
</html>
