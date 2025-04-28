<?php
class UserController {
    public function index() {
        ob_start();
        require_once '../app/views/Users.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }
}
