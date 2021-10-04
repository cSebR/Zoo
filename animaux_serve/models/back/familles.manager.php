<?php
require_once "models/Model.php";

class FamillesManager extends Model{
    public function getFamilles(){
        $req = "SELECT * FROM famille";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $familles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $familles;
    }

    public function deleteDBFamille($idFamille){
        $req="DELETE FROM famille where famille_id = :idFamille";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idFamille",$idFamille,PDO::PARAM_INT);
        $stmt->execute();
        $familles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
    }

    public function compterAnimaux($idFamille){
        $req = "SELECT COUNT(*) as 'nb' FROM famille f JOIN animal a on a.famille_id = f.famille_id WHERE f.famille_id = :idFamille";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idFamille",$idFamille,PDO::PARAM_INT);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $resultat['nb'];
    }

    public function updateFamille($idFamille,$libelle,$description){
        $req="UPDATE famille SET famille_libelle = :libelle, famille_description = :description WHERE famille_id = :idFamille";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idFamille",$idFamille,PDO::PARAM_INT);
        $stmt->bindValue(":libelle",$libelle,PDO::PARAM_STR);
        $stmt->bindValue(":description",$description,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function createFamille($libelle,$description){
        $req="INSERT INTO famille (famille_libelle,famille_description) values (:libelle, :description)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":libelle",$libelle,PDO::PARAM_STR);
        $stmt->bindValue(":description",$description,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return $this->getBdd()->lastInsertId();
   
    }
}