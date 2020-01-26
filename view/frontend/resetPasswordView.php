<?php $title = 'GBAF - Réinitialisation mot de passe'; ?>

<?php ob_start(); ?>
<div class="login-page">
    <h2>Mot de passe perdu ?</h2>
    <div class="form">
        <form class="login-form" action="index.php?action=lostpassword" method="post">
            <input type="text" name="username" placeholder="Login" required minlength="4" maxlength="15"/>
            <select name="question" required>
                <option value="">-- Question Secrète --</option>
                <option value="animal">Nom de votre animal</option>
                <option value="mother">Nom de jeune fille de votre mère</option>
                <option value="car">Votre première voiture</option>
            </select> 
            <input type="text" name="answer" placeholder="Réponse" required/>
            <input class="button" type="submit" value="RESET">
            <p class="message">Pas de compte ? <a href="index.php?action=register">Créer un compte</a></p>
            <p class="message">Déja un compte ? <a href="index.php">Login</a></p>
        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>