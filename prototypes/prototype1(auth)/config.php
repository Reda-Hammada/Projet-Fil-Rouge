<?php 

 class DataBase {


    private $host = 'localhost';
    private $db_name = 'commandes';
    private $username = 'root';
    private $password ='';
    private $connect;

    public function connectDB() {

       $this->connect = null;

       try{

        $this->connect = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name,
        $this->username,$this->password);


       }

       catch(PDOException  $error){

        echo 'Connection error: ' . $error->getMessage();

       }


       return $this->connect;
    
    }


 }