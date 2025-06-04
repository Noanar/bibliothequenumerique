<?php

require_once __DIR__ . '/../../config/Database.php';

class Livre {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getAll() {
        echo "connexion à la base de donnée réussie.";
        $stmt = $this->db->prepare("SELECT * FROM livres");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
$livre = new Livre();
$livres = $livre->getAll();
