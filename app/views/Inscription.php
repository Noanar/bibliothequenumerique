<h1>Inscription</h1>

<?php if (isset($error)) : ?>
    <div style="color: red; margin-bottom: 15px;">
        <?php echo htmlspecialchars($error); ?>
    </div>
<?php endif; ?>

<form action="?url=inscription" method="post">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>

    <label for="confirm_password">Confirmer le mot de passe :</label>
    <input type="password" name="confirm_password" id="confirm_password" required>

    <button type="submit">S'inscrire</button>
</form>

<p style="margin-top: 15px; text-align: center;">
    Déjà un compte ? <a href="?url=connexion">Connectez-vous ici</a>
</p>
