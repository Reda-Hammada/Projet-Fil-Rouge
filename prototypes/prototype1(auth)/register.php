<?php

include './config.php';
include './userManager.php';
include './userClass.php';


$db = new DataBase();
$userManager = new userManager($db);

if(isset($_POST)):

    if($_POST['password'] ==  $_POST['cPassword']):

        $user = new User();
        $user->setFullName($_POST['fullName']);
        $user->setUserName($_POST['userName']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $userManager->createUser($user);

    endif;

endif;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">

        <input type="text" name="fullName" placholder="enter your fullname here">
        <input type="text" name="userName" placeholder="enter your username here">
        <input type="email" name="email" plachoder ="enter your email here">
        <input type="password" name="password" placeholder="enter your password here">
        <input type="password" name="cPassowrd" placeholder="confirm your password">
        <input type="submit" value="sign up" >
    </form>
</body>
</html>