<?php 

class User {


    private $id;
    private $fullName;
    private $userName;
    private $email;
    private $newPassword;
    private $password;



    public function setId($id){

        $this->id = $id;
    }

    public function getId(){

        return $this->id;
    }


    public function getFullName(){

        return $this->fullName;
    }

    public function setFullName($fullName){

        $this->fullName = $fullName;
    }

    public function setUserName($userName){

        $this->userName = $userName;
    }

    public function getUserName(){

        return $this->userName;
    }

    public function setEmail($email){

        $this->email = $email;

    }

    public function getEmail(){

        return $this->email;
    }

    public function setPassword($password){

        $this->password = $password;
    }

    public function getPassword(){

        return $this->password;
    }

    public function setNewPassword($newPassword){

        $this->newPassword = $newPassword;
    }

    public function getNewPassword(){

        return $this->newPassword;
    }

}