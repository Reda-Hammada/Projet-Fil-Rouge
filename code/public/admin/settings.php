<?php

include '../../managers/userManager.php';
include '../../entities/userClass.php';
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
    <link rel="stylesheet" href="../asset/style/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
    <script>
        
<p>lorem</p>


    </script>
</head>
<body>
<header>

<nav class='d-flex'>

    <div class='navBar '>

        <p class='mt-2 ms-3'>Dashboard </p>

    </div>

</nav>

<header>

<section class='d-flex'>

<section class='sideNavBar'>

    <div class='d-flex mt-5 adminContainer '>
        <i class="fa-solid fa-house-user ms-4 mt-1"></i>
        <p class='ms-1'><a href='dashboard.php'>Admin</a></p>
    </div>

    <div class='d-flex mt-3 adminContainer'>

    <p onClick="renderEmail()" id='email'>Change your email</p>

    </div>
    <div class='logoutButton'>
        <button class='btn'><a href='../auth/logout.php'>log out</a></button>
    </div>
    <div class='adminName'>
        <p><?php echo 'logged as : ' . ucwords($_SESSION['fullName']) ?></p>
    </div>

</section>
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