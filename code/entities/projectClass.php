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

    public function setProjectName($projectName){
        
        $this->projectName = $projectName;
    }

    public function getProjectName(){

        return $this->projectName;
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

    public function getState(){

        return $this->state;
    }


    public function setDescription($description){

        $this->description = $description;
    }

    public function getDescription(){
        
        return $this->description;
    }

}


?>