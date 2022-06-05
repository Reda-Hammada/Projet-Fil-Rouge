<?php

class Project {
    
    private $id;
    private $projectUniqueId;
    private $projectName;
    private $clientName;
    private $state;
    private $description;


    public function setId($id){

        $this->id = $id;
    }

    public function getId(){

        return $this->id;

    }

    public function setUniqueId($projectUniqueId){

        $this->projectUniqueId  = $projectUniqueId;
    }

    public function getUniqueId(){
        
        return $this->projectUniqueId;
    }

    public function setProjectNumber($projectNumber){
        
        $this->projectNumber = $projectNumber;
    }

    public function getProjectNumber(){

        return $this->projectNumber;
    }

    public function setClientName($clientName){

        $this->clientName = $clientName;
    }

    public function getClientName(){

        return $this->clientName;
    }

    public function setState($state){

        return $this->state = $state;
    }


    public function setDescription($description){

        $this->description = $description;
    }

    public function getDescription(){
        
        return $this->description;
    }

}


?>