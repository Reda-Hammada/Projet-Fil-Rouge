<?php 

include '../../config/config.php';
include '../../managers/Projectmanager.php';
include '../../entities/projectClass.php';


//make instances 
$dataBase = new DataBase();
$db = $dataBase->connectDB();
$projectManager = new Projectmanager($db);

if(isset($_POST['check'])):

    $checkProgress = new Project();
    $checkProgress->setUniqueId($_POST['uniqueId']);
    $progress=  $projectManager->checkProgress($checkProgress);


endif;




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link  rel='stylesheet' href='../asset/style/client.css'>
    <title>Project Progress - Page</title>
</head>
<body>
    <header class='w-100 bg-light'>
        <nav class='d-flex justify-content-evenly '>
            <div class=logoContainer>
                <h2>MFE</h2>
            </div>
            <div class='navHomeLink'>
                <p><a href='../../public/index.php'>Home</a></p>
            </div>
        </nav>
    </header>
    <main>
        <section class="checkFormContainer">
           <div class="formContainer">
            <form method='post'> 
                    <input type='text' required name='uniqueId' placeholder='enter the  code to check  your project progress'>
                    <input type='submit' value='check' name='check'>
                </form>
           </div>
            
        </section>
        <section class='progressContainer'>

        <?php  if(isset($progress)) { ?>
            <div class='subProgressContainer' >
                 
                 <?php   foreach($progress as $project){ ?>

                        
                  <p>
                     <?php echo 'Hello ' . $project->getClientName(); ?>
                 </p>
                 <p>          
                    <?php echo 'your project is ' . $project->getState(); ?>
                 </p>
                 <p>
                    <?php echo $project->getDescription(); ?>
                 </p>
                 
                    <?php }
                    
                    }?>
            </div>
        </section>
    </main>
</body>
</html>
 