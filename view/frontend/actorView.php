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
        <div class="container-commentaires">
            <p class="commentaires-counter"><?= $counterComments['countcom'] ?> Commentaires <i class="fas fa-comments"></i></p>
            <div class="vote">                
                <div class="vote-button">
                    <a class="vote-thumb" href="index.php?action=actor&amp;id=<?= $actor['id_acteur'] ?>&amp;vote=like"><i class="fas fa-thumbs-up"></i><?= $likes['v_like'] ?></a>
                    <a class="vote-thumb" href="index.php?action=actor&amp;id=<?= $actor['id_acteur'] ?>&amp;vote=dislike"><i class="fas fa-thumbs-down"></i><?= $disLikes['v_dislike'] ?></a>
                </div>
                <button class="button">Nouveau commentaire</button>
            </div>
            <div class="nouveau-commentaire">
                <form action="index.php?action=actor&amp;id=<?= $actor['id_acteur'] ?>&amp;comment=new" method="post">
                    <input type="textarea" name="commentaire" placeholder="Saisissez votre commentaire" required>
                    <input type="submit" class="button" value="VALIDER">
                </form>
            </div>
            <div class="commentaires">
                <?php
                    while ($dataCom = $comments->fetch()) {
                ?>
                <div class="commentaire-light">
                    <p><i class="far fa-user"></i>  <?= $dataCom['prenom'] ?></p>
                    <p><?= $dataCom['date_comment'] ?></p>
                    <p><?= $dataCom['post'] ?></p>
                </div>
                <?php 
                } 
                $comments->closeCursor();
                ?>
            </div>
        </div>
    </div>
    
</div>

<?php include("footer.php"); ?>
<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>