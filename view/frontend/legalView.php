<?php $title = 'GBAF - Mentions légales'; ?>

<?php ob_start(); ?>

<?php include("header.php"); ?>

<div class="gbaf-container">
    <div class="login-page">
        <h2>Mentions légales</h2>
        <div class="form">
            <p><h3>Hébergeur :</h3></p>
            <p>Site hébergé chez OVH SAS<br></p>
            <p><h3>Projet :</h3></p>
            <p>Ce site a été réalisé dans le cadre du projet 3 du parcour Prep'fullstack sur OPENCLASSROOMS<br></p>
            <p><h3>Infos Société :</h3></p>
            <p>
                GBAF Groupement des Banques et Assurances Francaises <br>
                75000 Paris <br>
                Tel. 0123 456 789<br>
                SIRET 777 888 999 00099<br>
                immatriculé au registre du commerce et des sociétés de XXXX
            </p>
            <p><h3>Crédit photo :</h3></p>
            <p><br>OPENCLASSROOMS<br>PIXABAY</p>
            <p><h3>Développeur :</h3></p>
            <p> Raphaël Auberlet<br>+262 693 395 898 </p>
        </div>
    </div>    
</div>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>