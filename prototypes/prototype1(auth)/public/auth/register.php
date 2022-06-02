<?php

 include '../../managers/userManager.php';
include '../../entites/userClass.php';
include "../../config/config.php";

$database = new DataBase();
$db =  $database->connectDB();
$userManager = new userManager($db);

if(isset($_POST['submit'])){

        $user = new User();
        $user->setFullName($_POST['fullName']);
        $user->setUserName($_POST['userName']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $userManager->createUser($user);


  
}




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
    <form method="POST">

        <input type="text" name="fullName" placholder="enter your fullname here" required>
        <input type="text" name="userName" placeholder="enter your username here" required>
        <input type="email" name="email" plachoder ="enter your email here" required>
        <input type="password" name="password" placeholder="enter your password here" required>
        <input type="submit" value="sign up" name="submit" >
    </form>
</body>
</html>