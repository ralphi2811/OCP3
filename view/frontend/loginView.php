<?php $title = 'Login'; ?>
<?php $style = 'public/css/style_login.css'
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
                <input type="submit" value="S'identifier">
            </div>
            <div>
                <a href="index.php?action=lostpassword">Mot de passe oublié ?</a>
            </div>
        </form>
    </div>
</div>



