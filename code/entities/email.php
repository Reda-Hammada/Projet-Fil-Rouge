<?php

class Email {

    private $fullName; 
    private $email;
    private $message;
    public $to = 'hammada.reda.dev@gmail.com';


    public function setFullName ($fullName) {

        $this->fullName = $fullName;
    }

    public function getFullName(){

        return $this->fullName;
    }
    
    public function setEmail($email){

        $this->email = $email;
    }

    public function getEmail () {

        return $this->email;
    }

    public function setMessage($message){

        $this->message = $message;
    }

    public function getMessage () {

            return $this->message;
    }
}


?>