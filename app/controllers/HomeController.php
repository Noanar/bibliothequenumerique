<?php
class HomeController {
    public function index() {
        require_once '../app/views/Home.php';
        ob_start();
        require_once '../app/views/Layout.php';
        $content = ob_get_clean();
        echo $content;
    }
}
