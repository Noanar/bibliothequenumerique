<h1>Connexion</h1>

<?php if (isset($error)) : ?>
    <div style="color: red; margin-bottom: 15px;">
        <?php echo htmlspecialchars($error); ?>
    </div>
<?php endif; ?>

<form action="?url=connexion" method="post">
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Se connecter</button>
</form>

<p style="margin-top: 15px; text-align: center;">
    Pas de compte ? <a href="?url=inscription">Inscrivez-vous ici</a>
</p>
