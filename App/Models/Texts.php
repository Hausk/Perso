<?php 

namespace App\Models;
use DBConnection;

class Texts {
    
    // Connexion
    private $connexion;
    private $table = "everytext"; // Table dans la base de données

    // Propriétés
    public $id;
    public $title;
    public $desc;
    public $created_at;
    public $updated_at;

    public function __construct($db){
        $this->connexion = $db;
    }




    public function modifier(){
        // On écrit la requête
        $sql = "UPDATE " . $this->table . " SET title = :title, desc = :desc, created_at = :created_at, updated_at = :updated_at WHERE id = :id";
        
        // On prépare la requête
        $query = $this->connexion->prepare($sql);
        
        // On sécurise les données
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->desc=htmlspecialchars(strip_tags($this->desc));
        $this->created_at=htmlspecialchars(strip_tags($this->created_at));
        $this->updated_at=htmlspecialchars(strip_tags($this->updated_at));
        $this->id=htmlspecialchars(strip_tags($this->id));
        
        // On attache les variables
        $query->bindParam(':title', $this->title);
        $query->bindParam(':desc', $this->desc);
        $query->bindParam(':created_at', $this->created_at);
        $query->bindParam(':updated_at', $this->updated_at);
        $query->bindParam(':id', $this->id);
        
        // On exécute
        if($query->execute()){
            return true;
        }
        
        return false;
    }

    public function lire(){
        $sql = "SELECT * FROM" . $this->table . " ORDER BY created_at DESC";

        $query = $this->connexion->prepare($sql);

        $query->execute();

        echo json_encode($sql);
    }
}