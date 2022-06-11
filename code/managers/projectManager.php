<?php

class Projectmanager {

    private $connect;

    public function __construct($db){
        
        $this->connect = $db;
    }   


    public function createProject($id,$project){

        $uniqueId = $project->getUniqueId();
        $projectName = $project->getProjectName();
        $client = $project->getClientName();
        $description = $project->getDescription();
        $state = $project->getState();

        $query = "INSERT INTO projects (uniqueId,project_name,client_name,description,state,idUser) 
                  VALUES(:uniqueId, :projectName, :client,:description,:state,:id)";
        $stmt = $this->connect->prepare($query);
        $execute = $stmt->execute(['uniqueId' =>  $uniqueId, 'projectName' =>  $projectName, 'client' => $client, 
                        'description' =>  $description, 'state' => $state, 'id'=> $id]);

        if($execute){

            return "project added successfully";

        }

        else {

            if(!$execute){

                return "something went wrong";
            }
        }





    }

    // get all projects from the database 

    public function getProjects($id){

        $query = 'SELECT idUser,project_name,client_name,description,state,uniqueId FROM projects 
                  INNER JOIN users on users.id = projects.idUser WHERE idUser =:id';
        $stmt = $this->connect->prepare($query);
        $stmt->execute(['id'=>$id]);
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        $project = new Project();

        $projectsArray = array();

        foreach($result as $fetchedProject){


            $project->setUniqueId($fetchedProject['uniqueId']);
            // $project->setId($fetchedProject['id']);
            $project->setProjectName($fetchedProject['project_name']);
            $project->setClientName($fetchedProject['client_name']);
            $project->setState($fetchedProject['state']);
            $project->setDescription($fetchedProject['description']);


            array_push($projectsArray, $project);


        }

        return $projectsArray;
    }
}