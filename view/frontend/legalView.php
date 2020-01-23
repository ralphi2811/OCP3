<?php $title = 'Mentions légales'; ?>

<?php ob_start(); ?>

<?php include("header.php"); ?>

<div class="gbaf-container">
    <div class="legal">
        <p>Site hébergé chez OVH SAS<br></p>
        <p><strong>Infos Société :</strong></p>
        <p>GBAF Groupement des Banques et Assurances Francaises <br>73120 Saint-Bon-Tarentaise <br>Tel. 0123 456 789<br>SIRET 777 888 999 00099<br>immatriculé au registre du commerce et des sociétés de CHAMBERI</p>
        <p><strong>Crédit photo :</strong></p>
        <p><br>GBAF / OPENCLASSROOMS</p>
        <p><strong>Développeur :</strong></p>
        <p> Raphaël Auberlet<br>+262 693 395 898 </p>
    </div>
   
</div>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>