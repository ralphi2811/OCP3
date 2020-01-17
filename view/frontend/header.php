<header>
    <div class='header'>
        <a href="index.php?action=actors"><img class="logo" src="../../public/images/LOGO_GBAF.png" alt="Logo GBAF"></a>
        <div class="header-right">
            <i class="far fa-user-circle"></i>
            <a href="index.php?action=myaccount"><i class="fas fa-pen"></i> <?= $_SESSION['surname'] ?> <?= $_SESSION['name'] ?></a>
            <a href="index.php?action=logout">Se déconnecter</a>
         </div>
    </div>
</header>
