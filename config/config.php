<?php
include "Database.php";
try {
    $pdo = new PDO("mysql:host=localhost;port=3308;charset=utf8;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS bibliothequenumerique CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
    $pdo->exec("CREATE DATABASE bibliothequenumerique");
    $pdo->exec("USE bibliothequenumerique");
    $pdo->exec("
        CREATE TABLE utilisateurs(
           id_utilisateur INT,
           nom INT,
           email VARCHAR(50),
           mot_de_passe VARCHAR(500),
           role VARCHAR(50),
           date_creation DATE,
           PRIMARY KEY(id_utilisateur)
        );
        
        CREATE TABLE livres(
           id_livre INT,
           titre VARCHAR(50),
           auteur VARCHAR(50),
           categorie VARCHAR(50),
           disponible INT,
           PRIMARY KEY(id_livre)
        );
        
        CREATE TABLE commande(
           id_utilisateur INT,
           id_livre INT,
           id_commande INT NOT NULL,
           en_cours INT NOT NULL,
           date_de_retour DATE NOT NULL,
           PRIMARY KEY(id_utilisateur, id_livre),
           UNIQUE(id_commande),
           FOREIGN KEY(id_utilisateur) REFERENCES utilisateurs(id_utilisateur),
           FOREIGN KEY(id_livre) REFERENCES livres(id_livre)
        );
    ");

    echo json_encode(["success" => true, "message" => "Base et tables créées."]);
} catch (PDOException $e) {
    echo json_encode(["success" => false, "error" => $e->getMessage()]);
}
?>