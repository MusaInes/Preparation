<?php
if(isset($_REQUEST['username']) and isset($_REQUEST['password']))
{
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    require "connection/connection.php";
    $query="select * from users where username='".$username."' and password='".md5($password)."'";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['user']=$row;
        header("Location: index.php");
    }
    else
    {
        setcookie("notification","Login failed. Wrong username or password!",time()+3600*24,"/");
        header("Location: login.php");
    }
}