<?php

session_start();

include '../../managers/userManager.php';
include '../../entites/userClass.php';
include '../../config/config.php';

$dataBase = new DataBase();
$db = $dataBase->connectDB();
$userManager = new Usermanager($db);
$user = new User();





$id = $_SESSION['id'];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        



    </script>
</head>
<body>
    <section>
        <div>
            <div>
                <p onClick="renderEmail()" id='email'>Change your email</p>
            </div>
            <div>
                <p id='password'> change your password</p>

            </div>
        </div>
        <div id="para">
           
        </div>
    </section>
    
    <script src="../asset/script/app.js"></script>
</body>
</html>