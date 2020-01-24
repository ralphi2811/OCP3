<?php $title = 'GBAF - Mon compte'; ?>

<?php ob_start(); ?>

<?php include("header.php"); ?>
<div class="gbaf-container">
    <div class="login-page">
        <h2>Mon compte</h2>
        <div class="form">
            <form class="login-form" action="index.php?action=myaccount&amp;user=update" method="post">
                <label for="surname">Nom</label>
                <input type="text" name="surname" placeholder="Nom" required maxlength="15" minlength="4" value="<?= $userData['nom'] ?>"/>
                <label for="name">Prénom</label>
                <input type="text" name="name" placeholder="Prénom" required maxlength="15" minlength="4" value="<?= $userData['prenom'] ?>"/>
                <label for="username">Login</label>
                <input type="text" name="username" placeholder="Login" required maxlength="15" minlength="4" value="<?= $userData['username'] ?>"/>
                <label for="question">Question secrète</label>
                <select name="question" required>
                    <option value="">-- Question Secrète --</option>
                    <option id="animal" value="animal">Nom de votre animal</option>
                    <option id="mother" value="mother">Nom de jeune fille de votre mère</option>
                    <option id="car" value="car">Votre première voiture</option>
                </select>
                <label for="answer">Réponse</label>
                <input type="text" name="answer" placeholder="Réponse" required value="<?= $userData['reponse'] ?>"/>
                <input class="button" type="submit" value="modifier">
                <p class="message">Changer le mot de passe ? <a href="index.php?action=myaccount&amp;password=new">Modifier</a></p>
            </form>
        </div>        
    </div>
</div>


<?php include("footer.php"); ?>
<script src="../../public/js/selectquestion.js"></script>
<script>
    var question = '<?= $userData['question'] ?>';
    selectquestion(question);
</script>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>