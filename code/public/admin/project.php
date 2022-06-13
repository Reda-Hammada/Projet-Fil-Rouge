<?php


include '../../config/config.php';
include '../../managers/Projectmanager.php';
include '../../entities/projectClass.php';

 session_start();

/* project id to fetch the wanted project from database and
   freelancer id to user in INNER join 
*/

$idProject =  $_GET['id'];
$idFreelancer = $_SESSION['id'];

$dataBase = new DataBase();
$db = $dataBase->connectDB();
$projectManager = new Projectmanager($db);
$project = $projectManager->getProjectById($idProject,$idFreelancer);


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

    <title>Project page</title>
    
        


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
                <p class='ms-1'><a class='text-white' href='dashboard.php'>Admin dashboard</a></p>
            </div>

            <div class=' mt-3 adminContainer'>

            

            </div>
            <div class='logoutButton'>
                <button class='btn'><a href='../auth/logout.php'>log out</a></button>
            </div>
            <div class='adminName'>
                <p><?php echo 'logged as : ' . ucwords($_SESSION['fullName']) ?></p>
            </div>

        </section>
        <section>

            <div class="projectContainer ">
                <?php foreach($project as $specificProject) { ?>

                <h2 class='mb-4'><?php echo $specificProject->getUniqueId() ?></h2>
                <p>Project name : <?php echo $specificProject->getProjectName() ?></p>
                <p>Client name : <?php  echo $specificProject->getClientName() ?><p>
                <p>Client email : <?php echo $specificProject->getEmailClient() ?></p>
                <p>project phase : <?php echo $specificProject->getState() ?></p>
                <p>description : <?php echo $specificProject->getDescription() ?></p>
                
                <button class="sendCodeToClient"><a href="mailto:<?php echo  $specificProject->getEmailClient()?>?subject=Project progress code Request&body=Hello <?php echo $specificProject->getClientName()?>%0A%0Ayou can check your project progress with this code : <?php echo $specificProject->getUniqueId() ?>%0A%0Ausing this link : <?php  echo 'http://localhost/Projet-Fil-Rouge/code/public/client/client.php' ?>"> Send Email </a></button>

                <?php } ?>
            </div>

        <section>
    
    </section>
    
    <script src="../asset/script/app.js"></script>
</body>
</html>