<h1>Catalogue des Livres</h1>

<form action="?url=livres" method="get">
    <input type="hidden" name="url" value="livres">
    
    <input type="text" name="search" placeholder="Rechercher un livre..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
    <button type="submit">Rechercher</button>
</form>

<ul>
    <?php foreach ($livres as $livre) : ?>
        <li>
            <strong><?php echo htmlspecialchars($livre['titre']); ?></strong> par <?php echo htmlspecialchars($livre['auteur']); ?>
            (<?php echo htmlspecialchars($livre['categorie']); ?>) - 
            <em><?php echo $livre['disponible'] ? 'Disponible' : 'Emprunté'; ?></em>

            <?php if ($livre['disponible'] && isset($_SESSION['user'])) : ?>
                <form action="?url=emprunt" method="post" style="display: inline;">
                    <input type="hidden" name="livre_id" value="<?php echo $livre['id']; ?>">
                    <button type="submit">Réserver</button>
                </form>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
