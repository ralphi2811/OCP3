<?php $title = 'Créer un compte'; ?>

<?php ob_start(); ?>
<div class="login-page">
    <div class="form">
        <form class="login-form">
            <input type="text" name="surname" placeholder="Nom"/>
            <input type="text" name="name" placeholder="Prénom"/>
            <input type="text" name="username" placeholder="Login"/>
            <input type="password" name="password" placeholder="Mot de passe"/>
            <input type="password" name="password_check" placeholder="Vérifier mot de passe"/>
            <select name="question">
                <option value="">--Choisissez--</option>
                <option value="animal">Nom de votre animal</option>
                <option value="mother">Nom de jeune fille</option>
                <option value="car">Première voiture</option>
            </select>
            <input type="text" name="answer" placeholder="Réponse"/>
            <input class="button" type="submit" value="créer un compte">
            <p class="message">Pas de compte ? <a href="index.php?action=register">Créer un compte</a></p>
            <p class="message">Mot de passe oublié ? <a href="index.php?action=lostpassword">Réinitialiser</a></p>
        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>

