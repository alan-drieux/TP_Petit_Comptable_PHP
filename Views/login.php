<?php
require_once './Models/UserModels.php';
session_start();

if(isset($_SESSION['user'])){
    header("location: panel");
}else{
    if(!isset($_COOKIE['user'])){loginUserForm();}
    else {getCookieUser();var_dump($_SESSION);} 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>
<body>
<nav id="top-navbar">
        <div id="navbar___logo"></div>
        <a href="login" id="change">Logout</a>
</nav>
    <form method="POST" action="">
            <p>
                <span>Login</span>
            </p>
            <input type="email" name="email" placeHolder="email" required><br>
            <input type="text" name="password" placeHolder="Password" required><br>
            <input type="submit" name="submit">
    </form>
</body>
</html>