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
        if(!empty($result)){

            if($email == $result->email && $pass == $result->pass_word){

                $_SESSION['id'] = $result->id;
                $_SESSION['fullName'] = $result->full_name;
                $_SESSION['email'] = $result->email;
                $_SESSION['pass_word'] = $result->pass_word;
                header('location:./../admin/dashboard.php');
                
               
            }

                

        }



        
    }

    public function changeEmail($id,$user){

        $newEmail = $user->getEmail();
        $password = md5($user->getPassword());  
        $query =  'SELECT pass_word FROM users WHERE id =:id';
        $stmt = $this->connect->prepare($query);
        $stmt->execute(['id'=>$id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);     

        if($result->pass_word == $password){

            $updateEmail = "UPDATE users SET email = :newEmail WHERE id = :id";
            $prepare = $this->connect->prepare($updateEmail);
            $prepare->execute(['newEmail'=>$newEmail, 'id'=>$id]);

        }

        else{

            $error = 'password is Wrong';
            return $error;
        }
     


    }


    public function changePassword($id, $user){

        $password = md5($user->getPassword());
        $newPassword = md5($user->getNewPassword());
        $checkPassword = 'SELECT pass_word FROM users WHERE id=:id';
        $stmt = $this->connect->prepare($checkPassword);
        $stmt->execute(['id'=>$id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        if($password == $result->pass_word){

            $updatePass = 'UPDATE users SET pass_word = :newPassword WHERE id =:id';
            $stmt = $this->connect->prepare($updatePass);
            $stmt->execute(['newPassword'=>$newPassword,'id'=>$id]);
            header('location:../auth/login.php');


        }

        else{

            $error = 'password is not wrong';
            return $error;
        }

    }
        
    






}