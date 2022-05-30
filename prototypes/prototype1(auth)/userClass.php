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

    

}