<?php

 include '../../managers/userManager.php';
include '../../entities/userClass.php';
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
<section class='ultimateContainer'>
    
    <form method="POST">
        <div class="logInContainer">
            <input name="email" type="email" placeholder="enter your email" required>
            <input name="password" type="password" placeholder="enter your password" required> <br>
            <input name="submit" type="submit" value="Log in">
            <!-- <p><?php   if(isset($error)){ echo $error;} ?> </p> -->
        </div>

    </form>
<div class="welcomeContainer">
    <h1 class="welcome">
        Welcome
    </h1>
    <p class="welcomeP">
        Log in to access your dashboard.<br> 
        You don’t have an account yet ?<br>
        Sign up now 
    </p>
    <button class="signUp">
        <a href='signup.php'>Sign up</a>
    </button>
</div>
</section>
</body>
</html>