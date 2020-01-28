<?php $title = 'GBAF - Changer mot de passe'; ?>

<?php ob_start(); ?>

<?php $_SESSION['tempId'] = $_SESSION['userId'] ?>

<?php include("header.php"); ?>
<div class="gbaf-container">
    <div class="login-page">
        <h1>Changer de mot de passe</h1>
        <div class="form">
            <form class="login-form" action="index.php?action=lostpassword" method="post">
                <input type="password" name="password" placeholder="Nouveau mot de passe" required minlength="6"/>
                <input type="password" name="password_check" placeholder="Vérifiez le mot de passe" required onblur="checkpassword()"/>
                <input class="button" type="submit" value="VALIDER">
            </form>
        </div>
    </div>
</div>
<script src="../../public/js/verifyPassword.js"></script>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>