<?php $title = 'GBAF - Acceuil'; ?>

<?php ob_start(); ?>

<?php include("header.php"); ?>

<div class="gbaf-container">
    <div class="presentation-container">
        <h1>GBAF - Groupement des Banques et Assurances Francaises</h1>
        <p class="text-presentation">Le Groupement Banque Assurance Français​ (GBAF) est une fédération  représentant les 6 grands groupes français.</p>
        <img src="../../public/images/bandeau_paris.jpg" alt="Bandeau GBAF Paris" class="bandeau">
    </div>
    <div class="actors-container">
        <h2>Nos acteurs</h2>
        <p class="acteurs-presentation">Découvrez nos acteurs</p>
        <div class="actors">
            
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>