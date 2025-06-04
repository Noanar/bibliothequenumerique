<?php

class Database {
    private $host = 'localhost'; // Adresse du serveur
    private $port = '3308';
    private $dbname = 'bibliothequenumerique'; // Nom de la base de données
    private $username = 'root'; // Nom d'utilisateur
    private $password = ''; // Mot de passe
    private $charset = 'utf8'; // Jeu de caractères
    public $pdo;
    

    public function __construct() {
        try {
            $this->pdo = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset={$this->charset}",
                $this->username,
                $this->password
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
        
    }

    public function getConnection() {
        return $this->pdo;
    }
}
