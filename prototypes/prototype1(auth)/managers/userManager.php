<?php


class Usermanager {
 
    private $connect;

    public function   __construct($db){

    $this->connect = $db;

    }

    // this method creates new user 

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
        $result = $stmt->fetch(PDO::FETCH_OBJ); 
       
        // check if the password and email in loging is compatible to the one in the database 
        if(isset($result)){

            if($email == $result->email && $pass == $result->pass_word){

                $_SESSION['id'] = $result->id;
                $_SESSION['fullName'] = $result->full_name;
                header('location:./../admin/dashboard.php');
    
    
            }

            elseif($email != $result['email'] && $pass != $result['pass_word']){

                $error = "password or email is invalid";
                return $error;
            }

        else{

            header('location:register.php');
        }

        }
        
    }


    public function sendEmail(){


    }



}