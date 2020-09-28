<?php

namespace App\Models;

class Produits{
    // Connexion
    private $connexion;
    private $table = "produits"; // Table dans la base de données

    // Propriétés
    public $id;
    public $nom;
    public $description;
    public $prix;
    public $categories_id;
    public $categories_nom;
    public $created_at;

    /**
     * Constructeur avec $db pour la connexion à la base de données
     *
     * @param $db
     */
    public function __construct($db){
        $this->connexion = $db;
    }
}