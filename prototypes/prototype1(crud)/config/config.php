<?php 

 class DataBase {


    private $host = 'localhost';
    private $dbname = 'commandes';
    private $username = 'root';
    private $password ='';
    private $dsn;
    private $connect;

    public function connectDB() {

       $this->connect = null;

       try{


        $this->dsn = "mysql:host=$this->host; dbname=$this->dbname;";
        $this->connect = new PDO($this->dsn, $this->username, $this->password);
  


       }

       catch(PDOException  $e){

        echo 'Connection error: ' . $e->getMessage();

       }


       return $this->connect;
    
    }


    }

 