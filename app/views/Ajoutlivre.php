<h1>Ajouter un livre</h1>

<form action="?url=livres/ajouter" method="post">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" required>

    <label for="auteur">Auteur :</label>
    <input type="text" name="auteur" id="auteur" required>

    <label for="categorie">Catégorie :</label>
    <input type="text" name="categorie" id="categorie" required>

    <label for="disponible">Disponible :</label>
    <select name="disponible" id="disponible">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select>

    <button type="submit">Ajouter</button>
</form>
