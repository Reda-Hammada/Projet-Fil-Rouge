<?php

include '../../config/config.php';
include '../../managers/Projectmanager.php';
include '../../entities/projectClass.php';

session_start();

$id = $_SESSION['id'];

//  check if user session is set else it will redirect him login page
if(!$_SESSION['email'] && !$_SESSION['pass_word']){

    header('location:../auth/login.php');

}

$project = new Project();
$dataBase = new DataBase();
$db = $dataBase->connectDB();
$projectManager = new Projectmanager($db);

if(isset($_POST['addProject'])):


    $project->setUniqueId(uniqid());
    $project->setProjectName($_POST['projectName']);
    $project->setClientName($_POST['clientName']);
    $project->setstate($_POST['state']);
    $project->setDescription($_POST['description']);
    $projectAdded = $projectManager->createProject($id,$project);



endif;


$projects = $projectManager->getProjects($id);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../asset/style/style.css">

    <title>Document</title>
</head>
<body>
    <header>
        <nav class='bg-light w-100 bg-primary navBar'>
               

        </nav>
    <header>
    <section class='mt-5'>
        <div>
         
              <h2> <?php echo "Welcome " . ucwords($_SESSION['fullName']) . " this is your dashboard" ; ?></h2>

        </div>
    </section>
    <section>
        <div class='ms-3 mt-3 ' >
            <button id ='showButton' onclick="showPopUp()" class='btn btn-success text-white'>Add new project</button>
        <div>
        <div class='popupContainer'>
    
            <div class='mt-4 popupForm'>
                <div class="closePopUp">X</div>
                <form onSubmit='' class="addForm"  method='POST'>
                    <div class='form-group '>
                        <input  class="form-control w-75" required type='text' name='projectName'  placeholder ='project name'>

                    </div>
                    <div class=' mt-4 form-group'>

                        <input  class=" w-75  form-control" required type='text' name='clientName'   placeholder ='client name'>

                    </div>
                    <div class='  mt-4 form-group'>
                            
                        <input type='text' class="form-control  w-75" required name='state' placeholder='project phase'>
         

                    </div>
                    <div class=  mt-4 form-control'>
                        <textarea  placeholder="project description" class="  w-75 form-control" required name="description"></textarea>
                    </div>
                    <input id="addButton" class="  mt-3 btn bg-success text-white" type='submit' name="addProject" value="add project">

                </form>
            </div>
        </div>
        <div class='text-center bg-success text-white w-50'>
            <p> <?php if(isset($projectAdded)){ echo $projectAdded;  } ?>
        <div>
    </section>
    


    <script src="../asset/script/app.js"></script>

</body>
</html>