<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>
    <div class="errormessage">
        <img class="login_logo" src="../../public/images/LOGO_GBAF.png" alt="Logo GBAF">
        <div class="error_message">
            <p><?= $errorMessage ?></p> 
            <a href="javascript:history.go(-1)">Retour</a>
        </div>    
    </div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>
