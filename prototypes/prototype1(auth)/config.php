<?php 

 class DataBase {


    private $host = 'localhost';
    private $db_name = 'commands';
    private $username = 'root';
    private $password ='';
    private $connect;

    public function connectDB() {

       $this->connect = null;

       try{

        $this->connect = new PDO('mysql:host=' . $this->host . ';db_name=' . $this->db_name,
        $this->username , $this->password);


       }

       catch(PDOException  $error){

        echo 'Connection error: ' . $error->getMessage();

       }


       return $this->connect;
    
    }


 }