<?php
class LivreController {
    public function index() {
        $livres = [
            ['id' => 1, 'titre' => 'Le Petit Prince', 'auteur' => 'Antoine de Saint-Exupéry', 'categorie' => 'Roman', 'disponible' => true],
            ['id' => 2, 'titre' => '1984', 'auteur' => 'George Orwell', 'categorie' => 'Science-fiction', 'disponible' => false],
            ['id' => 3, 'titre' => 'L\'Étranger', 'auteur' => 'Albert Camus', 'categorie' => 'Roman', 'disponible' => true],
        ];

        ob_start();
        require_once '../app/views/Livres.php';
        $content = ob_get_clean();
        require_once '../app/views/Layout.php';
    }
}
