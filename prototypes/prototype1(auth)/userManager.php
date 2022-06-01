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
        $email = $user->getEmail();
        $password = md5($user->getPassword());
        $query = 'INSERT INTO users ("user_name",full_name,email,pass_word) VALUES(:userName,:fullName,:email,:password)';
        $stmt = $this->connect->prepare($query);
        $stmt->execute(['userName'=>$userName,'fullName'=> $fullName,'email'=> $email, 'password' => $password]);
        

    }



    public function logIn(){


        
    }



}