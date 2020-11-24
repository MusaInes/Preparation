<?php
session_start();
if(isset($_SESSION['user']))
{
    session_unset();
    setcookie("notification","You have been successfully logged out!",time()+3600*24,"/");
}
header("Location: login.php");
