<?php $title = 'Login'; ?>

<?php ob_start(); ?>
<div class="login">
    <h1>GBAF Login</h1>
    <img src="../../public/images/LOGO_GBAF.png" alt="LOGO_GBAF" class="logo"/>
    <div class="loginForm">
        <form action="index.php?action=login" method="post">
            <div>
                <input type="text" id="username" name="username" placeholder="Nom d'utilisateur">
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Mot de passe">
            </div>
            <div>
                <input class="button" type="submit" value="S'identifier">
            </div>
            
        </form>
        <div>
            <a href="index.php?action=lostpassword">Mot de passe oublié ?</a>
        </div>
        <div>
            <a href="index.php?action=createaccount">Créer un compte</a>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>

