<?php
class HomeController {
    public function index() {
        ob_start();
        require_once BASE_PATH . '/app/views/Home.php';
        $content = ob_get_clean();
        require_once BASE_PATH . '/app/views/Layout.php';
    }
}
