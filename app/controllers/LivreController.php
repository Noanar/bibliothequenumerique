<?php

require_once __DIR__ . '/../models/Livre.php';

class LivreController {
    public function index() {
        $livreModel = new Livre();
        $livres = $livreModel->getAll();

        ob_start();
        require_once '../app/views/Livres.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }

    public function ajouterForm() {
        ob_start();
        require_once '../app/views/AjouterLivre.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }

    public function ajouter() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titre = $_POST['titre'] ?? '';
            $auteur = $_POST['auteur'] ?? '';
            $categorie = $_POST['categorie'] ?? '';
            $disponible = isset($_POST['disponible']) ? 1 : 0;
    
            require_once '../config/Database.php';
            $db = new Database();
            $conn = $db->getConnection();
    
            $stmt = $conn->prepare("INSERT INTO livres (titre, auteur, categorie, disponible) VALUES (?, ?, ?, ?)");
            $stmt->execute([$titre, $auteur, $categorie, $disponible]);
    
            header('Location: ?url=livres');
            exit;
        }
    }
    
    
}
