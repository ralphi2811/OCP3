<?php $title = 'GBAF - Mon compte'; ?>

<?php ob_start(); ?>

<?php include("header.php"); ?>

<div class="gbaf-container">
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="index.php?action=myaccount&amp;user=update" method="post">
                <input type="text" name="username" placeholder="Login" required/>
                <input class="button" type="submit" value="LOGIN">
            
                <p class="message">Nouveau mot de passe ? <a href="index.php?action=myaccount&amp;password=new">Changer</a></p>
            </form>
        </div>        
    </div>
</div>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>