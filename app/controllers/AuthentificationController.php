<?php
class AuthentificationController {
    public function login() {
        ob_start();
        require_once '../app/views/Connexion.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }

    public function register() {
        ob_start();
        require_once '../app/views/Inscription.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }
    
    public function registerSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "Inscription reçue pour : " . htmlspecialchars($_POST['email']);
        } else {
            echo "Méthode non autorisée.";
        }
    }
    
}

