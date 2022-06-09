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
   
    $user = new User();
    






    if(isset($_POST['email'])){




            $user->setEmail($_POST['newEmail']);
            $user->setPassword($_POST['cPassword']);
          $error =  $userManager->changeEmail($id,$user); 
         
 

    }




    if(isset($_POST['password'])){



        $user->setPassword($_POST['oldPassword']);
        $user->setNewPassword($_POST['newPassword']);
       $error = $userManager->changePassword($id, $user);


        

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
        <div>
            <div id="emailDiv">
            
            </div>
            
        <div>
        
        <div id='passDiv'>
        </div>
    </section>
    
    <script src="../asset/script/app.js"></script>
</body>
</html>