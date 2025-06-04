<?php

require_once __DIR__ . '/../../config/Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getAll() {
        echo "connexion à la base de donnée réussie.";
        $stmt = $this->db->prepare("SELECT * FROM utilisateurs");
        $stmt->execute();
        echo "requête exécutée";
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
$livre = new User();
$livres = $livre->getAll();