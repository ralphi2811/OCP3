<?php $title = $actor['acteur']; ?>

<?php ob_start(); ?>

<?php include("header.php"); ?>

<div class="gbaf-container">
    <div class="actor-container">
        <div class="container-logo">
            <img class="presentation-logo "src="/public/images/<?= $actor['logo'] ?>" alt="logo <?= $actor['acteur'] ?>">
        </div>
        <div class="description">
            <h2><strong><?= $actor['acteur'] ?></strong></h2>
            <a href="#">Lien vers <?= $actor['acteur'] ?></a>
            <p class="description-longue">
                <?= nl2br($actor['description']) ?>
            </p>
        </div>
             
    </div>
    
</div>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>