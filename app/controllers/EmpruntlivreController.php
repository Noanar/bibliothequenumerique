<?php
class EmpruntlivreController {
    public function index() {
        ob_start();
        require_once '../app/views/Empruntlivres.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }
}
