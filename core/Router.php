<?php
class Router {
    public function handleRequest() {
        $url = $_GET['url'] ?? 'home';
        $method = $_SERVER['REQUEST_METHOD'];

        switch ($url) {
            case 'home':
                require_once BASE_PATH . '/app/views/Home.php';
                require_once BASE_PATH . '/app/controllers/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;

            case 'livres':
                require_once BASE_PATH . '/app/controllers/LivreController.php';
                $controller = new LivreController();
                $controller->index();
                break;

            case 'connexion':
                require_once BASE_PATH . '/app/controllers/AuthentificationController.php';
                $controller = new AuthentificationController();
                if ($method === 'POST') {
                    $controller->validerConnexion();
                } else {
                    $controller->login();
                }
                break;

            case 'inscription':
                require_once BASE_PATH . '/app/controllers/AuthentificationController.php';
                $controller = new AuthentificationController();
                if ($method === 'POST') {
                    $controller->register();
                } else {
                    $controller->registerForm();
                }
                break;

            case 'livres/ajouter':
                require_once BASE_PATH . '/app/controllers/LivreController.php';
                $controller = new LivreController();
                $controller->ajouter();
                break;

            default:
                echo "404 - Page non trouvée";
                break;
        }
    }
}
