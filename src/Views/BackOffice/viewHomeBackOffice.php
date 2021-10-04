<?php $title = 'BackOffice'; ?>
<?php $ressourceCSS = 'src/Assets/ressources/css/backoffice.css'; ?>

<?php ob_start(); ?>

<h1>BackOffice - Hello User</h1>

<?php $content = ob_get_clean(); ?>

<?php require('src/Views/template.php'); ?>