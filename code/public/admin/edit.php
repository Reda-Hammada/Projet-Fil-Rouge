<?php

include '../../config/config.php';
include '../../managers/Projectmanager.php';
include '../../entities/projectClass.php';

// start session
session_start();

//  check if user session is set else it will redirect him login page
if(!$_SESSION['email'] && !$_SESSION['pass_word']){

    header('location:../auth/login.php');
}

$idFreelancer = $_SESSION['id'];
$idProject = $_GET['id'];

//make instances 
$dataBase = new DataBase();
$db = $dataBase->connectDB();
$projectManager = new Projectmanager($db);

// method that brings the project by id based on each user
$project = $projectManager->getProjectById($idProject,$idFreelancer);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../asset/style/admin.css">

    <title>Admin dashboard</title>
</head>
<body>
    <header>

        <nav class='d-flex'>

            <div class='navBar '>

                <p class='mt-2 ms-3'>Dashboard </p>

            </div>

        </nav>

    <header>
 <main>
    <section class='d-flex'>

        <section class='sideNavBar'>
      
            <div class='d-flex mt-5 adminContainer '>
                <i class="fa-solid fa-house-user ms-4 mt-1"></i>
                <p class='ms-1'><a href='dashboard.php'>Admin dashboard</a></p>
            </div>

            <div class='d-flex mt-3 adminContainer'>

                <i class="fa-solid fa-gear ms-4 mt-1"></i>
                <p class='ms-2 mb-2'><a href='settings.php'>Settings</a></p>

            </div>
            <div class='logoutButton'>
                <button class='btn'><a href='../auth/logout.php'>log out</a></button>
            </div>
            <div class='adminName'>
                <p><?php echo 'logged as : ' . ucwords($_SESSION['fullName']) ?></p>
            </div>

        </section>

        <section class='mainContainer'>

                <div>
                    <form method='post'>
                    <div class='form-group '>

                        <?php foreach($project as $fetchedProject) { ?>

                            <input  class="form-control w-75" required type='text' name='projectName' value=<?php echo $fetchedProject->getProjectName()?> placeholder ='project name'>

                        </div>

                        <div class=' mt-4 form-group'>

                            <input value=<?php echo $fetchedProject->getClientName()?> class=" w-75  form-control" required type='text' name='clientName'   placeholder ='client name'>

                        </div>

                        <div class=' mt-4 form-group'>

                            <input value=<?php echo $fetchedProject->getEmailClient()?>  class=" w-75  form-control" required type='email' name='emailClient'   placeholder ='client email'>

                        </div>

                        <div class='  mt-4 form-group'>
                                
                            <input value=<?php echo $fetchedProject->getState() ?> type='text' class="form-control  w-75" required name='state' placeholder='project phase'>
            

                        </div>

                        <div class=  mt-4 form-control'>

                            <textarea  class="  w-75 form-control" required name="description"><?php echo $fetchedProject->getDescription() ?></textarea>

                        </div>

                        <div class='edit'>

                            <input id="addButton" class="  mt-3 btn  text-white" type='submit' name="addProject" value="Edit">

                        </div>
                    <?php } ?>
                    </form> 
                </div>
           
      
         </section>
 
    

</main>

    <script src="../asset/script/app.js"></script>

</body>
</html>