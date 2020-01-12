<header>
    <div class='header'>
        <img class="logo" src="../../public/images/LOGO_GBAF.png" alt="Logo GBAF">
        <div class="header-right">            
            <a href="index.php?action=myaccount"><?= $_SESSION['surname'] ?> <?= $_SESSION['name'] ?></a>
            <a href="index.php?action=logout">Se déconnecter</a>
         </div>
    </div>
</header>
