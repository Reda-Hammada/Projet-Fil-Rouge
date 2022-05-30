<?php

include './config.php';
include './userManager.php';


$db = new DataBase();
$userManager = new userManager($db);

?>