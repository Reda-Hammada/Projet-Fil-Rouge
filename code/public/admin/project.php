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