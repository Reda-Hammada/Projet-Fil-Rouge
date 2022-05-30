<?php 

class User {


    private $id;
    private $image;
    private $fullName;
    private $userName;
    private $email;
    private $password;



    public function setId($id){

        $this->id = $id;
    }

    public function getId(){

        return $this->id;
    }

    public function setImage($image){

        $this->image = $image;

    }

    public function getImage(){

        return $this->image;
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

}