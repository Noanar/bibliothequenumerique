<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="?url=home">Accueil</a>
        <a href="?url=livres">Livres</a>
        <a href="?url=connexion">Connexion</a>
    </nav>
    <div class="content">
        <?php echo isset($content) ? $content : ''; ?>
    </div>
</body>
</html>
