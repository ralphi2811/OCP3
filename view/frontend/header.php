<header>
    <div class='header-container'>
    <img class="login_logo" src="../../public/images/LOGO_GBAF.png" alt="Logo GBAF">
        <div class="header-user">
            <i class="fas fa-user"></i>
            <a href="index.php?action=myaccount"><?= $_SESSION['surname'] ?> <?= $_SESSION['name'] ?></a>
            <a href="index.php?action=logout">Se déconnecter</a>
        </div>
    </div>
</header>
