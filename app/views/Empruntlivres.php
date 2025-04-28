<?php include('Layout.php'); ?>

<?php ob_start(); ?>
<h1>Emprunts de Livres</h1>
<!-- Liste des emprunts ici -->
<?php $content = ob_get_clean(); ?>
