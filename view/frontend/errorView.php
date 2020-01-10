<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>
<div class="errormessage">
    <p><?= $errorMessage ?></p> 
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>
