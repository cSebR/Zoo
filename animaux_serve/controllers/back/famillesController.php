<?php

require_once "./controllers/back/Securite.class.php";
require_once "./models/back/familles.manager.php";

class FamilleController{
    private $famillesManager;

    public function __construct(){
        $this->famillesManager = new FamillesManager();
    }
    
    public function visualisation(){
        if(Securite::verifAccessSession()){
            $familles = $this->famillesManager->getFamilles();

            require_once "views/famillesVisualisationView.php";
        }else{
            throw new Exception(("vous n'avez pas le droit"));
        }
    }    

    public function suppression(){
        if(Securite::verifAccessSession()){
            $this->famillesManager->deleteDBFamille((int)Securite::secureHTML($_POST['famille_id']));
        }else{
            throw new Exception(("vous n'avez pas le droit"));
        }
    }

    
}