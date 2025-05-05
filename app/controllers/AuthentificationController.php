<?php

class AuthentificationController {
    // Affiche le formulaire de connexion
    public function login() {
        ob_start();
        require_once '../app/views/Connexion.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }

    // Traite la tentative de connexion
    public function validerConnexion() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $error = '';

        require_once BASE_PATH . '/config/Database.php';
        $db = new Database();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['mot_de_passe'])) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: ?url=home');
            exit;
        } else {
            $error = "Identifiants invalides";
            ob_start();
            require '../app/views/Connexion.php';
            $content = ob_get_clean();
            require '../app/views/Layout.php';
        }
    }

    // Affiche le formulaire d'inscription
    public function registerForm() {
        ob_start();
        require_once '../app/views/Inscription.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }

    // Traite le formulaire d'inscription
    public function register() {
        $nom = $_POST['nom'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirm = $_POST['confirm_password'] ?? '';
        $error = '';

        if ($password !== $confirm) {
            $error = "Les mots de passe ne correspondent pas.";
        } else {
            require_once BASE_PATH . '/config/Database.php';
            $db = new Database();
            $conn = $db->getConnection();

            $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe, role, date_creation) VALUES (?, ?, ?, 'utilisateur', NOW())");
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            try {
                $stmt->execute([$nom, $email, $hashed]);
                header('Location: ?url=connexion');
                exit;
            } catch (PDOException $e) {
                $error = "Erreur : " . $e->getMessage();
            }
        }

        ob_start();
        require '../app/views/Inscription.php';
        $content = ob_get_clean();
        require '../app/views/Layout.php';
    }
}
