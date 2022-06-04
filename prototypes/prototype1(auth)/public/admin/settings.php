<?php

include '../../managers/userManager.php';
include '../../entites/userClass.php';
include '../../config/config.php';


session_start();

$id = $_SESSION['id'];

if(!$_SESSION['email'] && !$_SESSION['pass_word']){

    header('location:../auth/login.php');

}

    $dataBase = new DataBase();
    $db = $dataBase->connectDB();
    $userManager = new Usermanager($db);
    $userEmail = new User();
    $userPass = new User();






    if(isset($_POST['email'])){


        if(!$userEmail):

            $userEmail->setEmail($_POST['newEmail']);
            $userEmail->setPassword($_POST['cPassword']);
            $userManager->changeEmail($id,$userEmail); 

        endif;   

    }


    if(isset($_POST['password'])){


        if(!$userPass):

        $userPass->setPassword($_POST['oldPassword']);
        $userPass->setNewPassword($_POST['newPassword']);
        $userManager->changePassword($id, $userPass);


        endif;

    }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        
<p>lorem</p>


    </script>
</head>
<body>
    <section>
        <div>
            <div>
                <p onClick="renderEmail()" id='email'>Change your email</p>
            </div>
            <div>
                <p  onClick="renderPass()" id='pass'> change your password</p>

            </div>
        </div>
        <div id="emailDiv">
           <p><?php if(isset($errorEmail)){ echo $errorEmail; } ?></p>
        </div>
        <div id='passDiv'>
            <p><?php if(isset($errorPassword)){echo $errorPassword; } ?></p>
        </div>
    </section>
    
    <script src="../asset/script/app.js"></script>
</body>
</html>