<?php $title = 'GBAF - Contact'; ?>

<?php ob_start(); ?>

<?php include("header.php"); ?>

<div class="gbaf-container">
    <div class="login-page">
        <h2>Contactez nous</h2>
        <div class="form">
            <form class="login-form" action="index.php?action=contact" method="post">
                <input type="text" name="name" placeholder="Saisissez votre Nom et Prénom" value="<?= ucfirst($_SESSION['surname']) ?> <?= ucfirst($_SESSION['name']) ?>" required/>
                <input type="email" name="email" placeholder="E-mail" required/>
                <textarea name="message" rows="6" placeholder="Saisissez votre message" required></textarea>
                <input class="button" type="submit" value="ENVOYER">
            </form>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>