<?php

class Router {
    public function handleRequest() {
        $url = $_GET['url'] ?? 'home';
        $method = $_SERVER['REQUEST_METHOD']; // GET ou POST

        switch ($url) {
            case 'home':
                require_once '../app/controllers/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;

            case 'livres':
                require_once '../app/controllers/LivreController.php';
                $controller = new LivreController();
                $controller->index();
                break;

            case 'inscription':
                    require_once '../app/controllers/AuthentificationController.php';
                    $controller = new AuthentificationController();
                    $controller->register();
                    break;

            case 'inscription':
                    require_once '../app/controllers/AuthentificationController.php';
                    $controller = new AuthentificationController();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $controller->register();
                    } else {
                        $controller->registerForm();
                    }
                    break;

                
            case 'inscription/valider':
                    require_once '../app/controllers/AuthentificationController.php';
                    $controller = new AuthentificationController();
                    $controller->registerSubmit();
                    break;                

            case 'connexion':
                require_once '../app/controllers/AuthentificationController.php';
                $controller = new AuthentificationController();
                if ($method === 'POST') {
                    $controller->validerConnexion();
                } else {
                    $controller->login();
                }
                break;

            default:
                echo "404 - Page non trouvée";
                break;
        }
    }
}