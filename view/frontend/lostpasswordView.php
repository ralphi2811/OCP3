<?php $title = 'Mot de passe perdu'; ?>

<?php ob_start(); ?>
<div class="login-page">
    <div class="form">
        <form class="login-form">
            <input type="text" name="username" placeholder="Login"/>
            <select name="question">
                <option value="">-- Question Secrète --</option>
                <option value="animal">Nom de votre animal</option>
                <option value="mother">Nom de jeune fille de votre mère</option>
                <option value="car">Votre première voiture</option>
            </select>            
            <input class="button" type="submit" value="RESET">
            <p class="message">Pas de compte ? <a href="index.php?action=register">Créer un compte</a></p>
            <p class="message">Déja un compte ? <a href="index.php">Se connecter</a></p>
        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>