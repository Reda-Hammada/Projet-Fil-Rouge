<?php

    session_start();

    include '../../config/config.php';
    include '../../managers/userManager.php';
    include '../../entities/userClass.php';
    
    $database = new DataBase();
    $db = $database->connectDB();
    $userManager = new Usermanager($db);
    $user = new User();

    if(isset($_SESSION['email'],  $_SESSION['pass_word'])){

        if($_SESSION['email'] && $_SESSION['pass_word']):

        header('location:./../admin/dashboard.php');

        endif;
    }
    

    if(isset($_POST['submit'])){

        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);  
        $error = $userManager->logIn($user); 
            



    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/login.css">
    <link rel='stylesheet' href='../asset/style/responsive.css'>
    <title>Log in</title>
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