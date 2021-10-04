<?php
require_once "models/Model.php";

class ContinentsManager extends Model{
    public function getContinents(){
        $req = "SELECT * FROM continent";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $animaux;
    }

    public function addContinentAnimal($idAnimal,$idContinent){
        $req="INSERT INTO animal_continent (aniaml_id,continent_id) values (:idAnimal :idContinent)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idAnimal",$idAnimal,PDO::PARAM_INT);
        $stmt->bindValue(":idContinent",$idContinent,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function deleteDBAnimalContinent($idAnimal,$idContinent){
        $req="DELETE FROM animal_continent where animal_id= :idAnimal and continent_id = :idContinent";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idAnimal",$idAnimal,PDO::PARAM_INT);
        $stmt->bindValue(":idContinent",$idContinent,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    /*public function deleteDBAnimal($idAnimal){
        $req="DELETE FROM animal where animal_id= :idAnimal";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idAnimal",$idAnimal,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }*/

    public function verificationExisteAnimalContinent($idAnimal,$idContinent){
        $req = "SELECT COUNT(*) as 'nb' FROM animal_continent as WHERE ac.animal_id = :idAnimal a,d ac.continent_id = :idContinent";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idAnimal",$idAnimal,PDO::PARAM_INT);
        $stmt->bindValue(":idContinent",$idContinent,PDO::PARAM_INT);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        
        if($resultat['nb'] >=1){
            return true;
        }
        else{
            return false;
        }
    }

}