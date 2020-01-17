<?php $title = 'GBAF - Acceuil'; ?>

<?php ob_start(); ?>
<?php include("header.php"); ?>

<div class="gbaf-container">
    
    <p>contenu de la page principale</p>
    <p><?= $_SESSION['name']; ?></p>
    <p><?= $_SESSION['surname']; ?></p>
    <p><?= $_SESSION['userId']; ?></p>
    
</div>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>