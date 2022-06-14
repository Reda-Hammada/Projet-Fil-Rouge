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

// create instances of objects
$project = new Project();
$dataBase = new DataBase();
$db = $dataBase->connectDB();
$projectManager = new Projectmanager($db);

if(isset($_POST['addProject'])):


    $project->setUniqueId(uniqid());
    $project->setProjectName($_POST['projectName']);
    $project->setClientName($_POST['clientName']);
    $project->setEmailClient($_POST['emailClient']);
    $project->setstate($_POST['state']);
    $project->setDescription($_POST['description']);
    $projectAdded = $projectManager->createProject($id,$project);
    

    // redirecting the user to stop the form from resubmission
    header('location: dashboard.php');





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

            <div class='ms-3 mt-3 popUpButtonContainer ' >

                <button id ='showButton' onclick="showPopUp()" class='btn text-white'>Add new project</button>

            <div>
                
            <div class='popupContainer'>

                <div class='mt-4 popupForm'>

                    <div class='closeContainer'>

                        <div id='closePopUp' onclick="hideForm()" class="closePopUp">X</div>

                    </div>

                    <form onSubmit='' class="addForm"  method='POST'>

                        <div class='form-group '>
                            <input  class="form-control w-75" required type='text' name='projectName'  placeholder ='project name'>

                        </div>

                        <div class=' mt-4 form-group'>

                            <input  class=" w-75  form-control" required type='text' name='clientName'   placeholder ='client name'>

                        </div>

                        <div class=' mt-4 form-group'>

                            <input  class=" w-75  form-control" required type='email' name='emailClient'   placeholder ='client email'>

                        </div>

                        <div class='  mt-4 form-group'>
                                
                            <input type='text' class="form-control  w-75" required name='state' placeholder='project phase'>
            

                        </div>

                        <div class=  mt-4 form-control'>

                            <textarea  placeholder="project description" class="  w-75 form-control" required name="description"></textarea>

                        </div>

                        <div class='addProjectContainer'>

                            <input id="addButton" class="  mt-3 btn  text-white" type='submit' name="addProject" value="add project">

                        </div>

                    </form>

                </div>
            </div>
            <section class='projectSection mt-5'>

                <div class='w-100 '>
                    
                    <table class= 'table table-hover'>
                            <tr>
                                <th>project code</th>
                        
                                <th>project name</th>
                        
                                <th>client name</th>
                        
                                <th>state</th>

                                <th>action</th>
                            </tr>

                            <?php foreach($projects as $project) { ?>

                                <tr >
                                    <td><?php echo $project->getUniqueId() ?></td>
                                    <td><?php echo $project->getProjectName() ?></td>
                                    <td><?php echo $project->getClientName() ?></td>
                                    <td><?php echo $project->getState() ?></td>
                                    <td >
                                        <button  class='btn showButton  '><a class='text-white show' href="project.php?id=<?php echo $project->getId() ?>">view</a></button>
                                        <button class='btn editButton '><a class='text-white edit' href='edit.php?id=<?php echo $project->getId() ?>'>edit</a></button>
                                        <button class='btn deleteButton '><a class='text-white delete' href='delete.php?id=<?php echo $project->getId() ?>'>delete</a></button>
                                    </td>
                                </tr>
                        <?php } ?>  
                    </table>
                
                                
                </section>
            

            </section>

        </section>



    </main>

    <script src="../asset/script/app.js"></script>

</body>
</html>