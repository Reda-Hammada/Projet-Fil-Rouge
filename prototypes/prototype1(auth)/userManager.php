<?php

include './config.php';


class Usermanager {
 
    private $connect;

    public function   __construct($db){

    $this->connect = $db;

    }

    public function createUser($user){

        $fullName = $user->getFullName();
        $userName = $user->getUserName();

    }



    public function logIn(){


        
    }



}