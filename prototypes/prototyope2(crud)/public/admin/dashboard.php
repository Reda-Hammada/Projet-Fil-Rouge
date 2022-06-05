<?php

include '../../config/config.php';
include '../../managers/Projectmanager.php';
include '../../entites/projectClass.php';

session_start();

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
    $project->setProjeName($_POST['projectName']);
    $project->setClientName($_POST['clientName']);
    $project->setstate($_POST['state']);
    $projectManager->createProject($project);



endif;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="../auth/logout.php">Log out</a>
            <a href="../admin/settings.php">Settings</a>
        </nav>
    <header>
    <section>
        <div>

            <?php echo "welcome " . $_SESSION['fullName'] . " this is your dashboard" . "and your id " . $_SESSION['id']; ?>

        </div>
    </section>
    <section>
        <form method='POST'>
            <input required type='text' name='projectName'  placeholder ='project name'>
            <input required type='text' name='clientName'   placeholder ='client name'>
            <select required name='state'>
                <option></option>
                <option value="phase 1">phase 1</option>
                <option value ="phase 2">phase 2</option>
                <option value="phase 3">phase 3</option>
                <option value="finished">finished</option>
            <select>
            <textarea required name="description">

            </textarea>
            <input type='submit' name="addProject" value="add project">

        </form>
    </section
</body>
</html>