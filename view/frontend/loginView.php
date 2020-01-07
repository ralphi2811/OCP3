<?php $title = 'Login'; ?>

<?php ob_start(); ?>
<div class="login-page">
    <img src="../../public/images/LOGO_GBAF.png" alt="Logo GBAF">
    <div class="form">
        <form class="login-form">
            <input type="text" name="username" placeholder="Login"/>
            <input type="password" name="password" placeholder="Mot de passe"/>
         <input class="button" type="submit" value="LOGIN">
        <p class="message">Pas de compte ? <a href="index.php?action=register">Créer un compte</a></p>
        <p class="message">Mot de passe oublié ? <a href="index.php?action=lostpassword">Réinitialiser</a></p>
        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>
