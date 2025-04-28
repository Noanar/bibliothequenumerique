<?php include('Layout.php'); ?>

<?php ob_start(); ?>
<h1>Bienvenue à la Bibliothèque</h1>
<p>Consultez notre catalogue, gérez vos emprunts et plus encore.</p>
<?php $content = ob_get_clean(); ?>
