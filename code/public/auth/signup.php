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
    <link rel='stylesheet' href='../asset/style/signup.css'>
    <title>Register</title>
</head>
<body>
<section class='ultimateContainer'>
    
    <form method="POST">
        <div class="logInContainer">
            <input type='text' name='fullName' placeholder='your fullname' required>
            <input type='text' name='userName' placeholder='your username' required>
            <input name="email" type="email" placeholder="enter your email" required>
            <input name="password" type="password" placeholder="enter your password" required> <br>
            <input name="submit" type="submit" value="Sign up">
            <!-- <p><?php   if(isset($error)){ echo $error;} ?> </p> -->
        </div>

    </form>
<div class="welcomeContainer">
    <h1 class="welcome">
        Welcome
    </h1>
    <p class="welcomeP">
        create your account and start using 
        our features <br>
       
    </p>
    <p class='already'> you already have an account ?</p>
    <button class="signUp">
        <a href='login.php'>Log in</a>
    </button>
</div>
</section>
</body>
</html>