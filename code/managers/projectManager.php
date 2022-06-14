<?php

class Projectmanager {

    private $connect;

    public function __construct($db){
        
        $this->connect = $db;
    }   

    /* method to create new project and insert it into the database 
        based on the user id -freelancer in this case- */

    public function createProject($id,$project){

        $uniqueId = $project->getUniqueId();
        $projectName = $project->getProjectName();
        $clientEmail = $project->getEmailClient();
        $client = $project->getClientName();
        $description = $project->getDescription();
        $state = $project->getState();

        $query = "INSERT INTO projects (uniqueId,project_name,client_email,client_name,description,state,idUser) 
                  VALUES(:uniqueId, :projectName,:clientEmail,:client,:description,:state,:id)";

        $stmt = $this->connect->prepare($query);

        $execute = $stmt->execute(['uniqueId' =>  $uniqueId, 'projectName' =>  $projectName, 
                                    'clientEmail' => $clientEmail,'client' => $client, 
                                    'description' =>  $description, 'state' => $state, 'id'=> $id]);

 





    }

    // get all projects from the database 

    public function getProjects($id){

        $query = 'SELECT * FROM projects 
                  INNER JOIN users on users.id = projects.idUser WHERE idUser =:user';
        $stmt = $this->connect->prepare($query);
        $stmt->execute(['user'=>$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $projectsArray = array();

        foreach($result as $fetchedProject){

            $project = new Project();
            $project->setUniqueId($fetchedProject['uniqueId']);
            $project->setId($fetchedProject['idProject']);
            $project->setProjectName($fetchedProject['project_name']);
            $project->setClientName($fetchedProject['client_name']);
            $project->setState($fetchedProject['state']);
            $project->setDescription($fetchedProject['description']);



            array_push($projectsArray, $project);

        }



        return $projectsArray;
    }


    // fetch a specific project by id 
    public function getProjectById($idProject,$idFreelancer) {

        $query = 'SELECT * FROM projects INNER JOIN 
                  users on users.id = projects.idUser 
                 WHERE idProject = :id_project AND idUser = :id ';

        $stmt = $this->connect->prepare($query);
        $stmt->execute(["id_project"=>$idProject,"id"=>$idFreelancer]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if($result):

                $projectArray = array();

                foreach($result as $specificProject){

                    $project = new Project();
                    $project->setUniqueId($specificProject['uniqueId']);
                    $project->setProjectName($specificProject['project_name']);
                    $project->setClientName($specificProject['client_name']);
                    $project->setEmailClient($specificProject['client_email']);
                    $project->setState($specificProject['state']);
                    $project->setDescription($specificProject['description']);

                    array_push($projectArray, $project);
                }

                return $projectArray;


            endif;


    }

    public function deleteProject($idProject){


        $query = 'DELETE  FROM projects 
                    WHERE idProject = :id_project ';
          $stmt = $this->connect->prepare($query);
          $stmt->execute(['id_project'=>$idProject]);
        
    }



}