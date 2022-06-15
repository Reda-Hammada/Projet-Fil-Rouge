<?php

include '../../config/config.php';
include '../../managers/Projectmanager.php';
include '../../entities/projectClass.php';

 session_start();

$idProject =  $_GET['id'];

$dataBase = new DataBase();
$db = $dataBase->connectDB();
$projectManager = new Projectmanager($db);

$projectManager->deleteProject($idProject,$idFreelancer);

header('location:dashboard.php');

?>