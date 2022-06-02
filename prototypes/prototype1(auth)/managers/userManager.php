<?php

// include '../../config/config.php';

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
        $query = 'INSERT INTO users (user_name,full_name,email,pass_word) VALUES(:user_name,:fullName,:email,:password)';
        $stmt = $this->connect->prepare($query);
        $stmt->execute(['user_name'=>$userName,'fullName'=> $fullName,'email'=> $email, 'password' => $password]);
        header('location:login.php');

    }



    public function logIn($user){

        // fetch user credentials from database
        $email = $user->getEmail();
        $pass = md5($user->getPassword());
        $query = 'SELECT * FROM users WHERE email = :email AND pass_word = :pass';
        $stmt = $this->connect->prepare($query);
        $stmt->execute(['email'=>$email, 'pass'=>$pass]);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ); 
       
        // check if the password and email in loging is compatible to the one in the database 
        if($email == $result->email && $pass == $result->pass_word){
                
            header('location:dashboard.php');


        }

    //     elseif($email != $result['email'] && $pass != $result['pass_word']){

    //             echo "email or password invalid";

    // }

        // else{

        //     header('location:register.php');
        // }


        
    }


    public function sendEmail(){


    }



}